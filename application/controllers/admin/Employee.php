<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of property_types
 *
 * @author DELL
 */
class Employee extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Employee_model');
        $this->load->model('Department_model');
        $this->load->model('Designation_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {

        //all the posts sent by the view
        $filter= $this->input->post('filter');
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/employees';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * $config['per_page']) - $config['per_page'];
        if ($offset < 0) {
            $offset = 0;
        }

        $employees = $this->Employee_model->find_with_search($config['per_page'], $offset,$filter, $search_string, $order, $order_type);


        $config['total_rows'] = $employees == null ? 0 : count($employees);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['employees'] = $employees;

        //load the view
        $data['content'] = 'admin/employees/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('emp_name', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_department', 'Team ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_contact_no', 'Contact number', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_email_id', 'Email id', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->profile_image_upload()) {
                $data_to_store = array(
                    'emp_name' => $this->input->post('emp_name'),
                    'emp_department' => $this->input->post('emp_department'),
                    'emp_designation' => $this->input->post('emp_designation'),
                    'emp_registration_id' => $this->input->post('emp_registration_id'),
                    'emp_location' => $this->input->post('emp_location'),
                    'emp_contact_no' => $this->input->post('emp_contact_no'),
                    'emp_email_id' => $this->input->post('emp_email_id'),
                    'emp_area_specialized' => $this->input->post('emp_area_specialized'),
                    'emp_languages' => $this->input->post('emp_languages'),
                    'emp_description' => $this->input->post('emp_description'),
                    'emp_profile_image' => (empty($this->upload_data) || !isset($this->upload_data['emp_profile_image'])) ? "" : $this->upload_data['emp_profile_image']['file_name'],
                    'emp_featured_agent' => ($this->input->post('emp_featured_agent') === null) ? 0 : 1
                );

                //if the insert has returned true then we show the flash message
                if ($this->Employee_model->insert($data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }

        $data['designations'] = $this->Designation_model->find_all();
        $data['departments'] = $this->Department_model->find_all();
        //load the view
        $data['content'] = 'admin/employees/add';
        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Update item by his id
     * @return void
     */
    public function update($id) {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

             //form validation
            $this->form_validation->set_rules('emp_name', 'Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_department', 'Team ', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_contact_no', 'Contact number', 'trim|required|xss_clean');
            $this->form_validation->set_rules('emp_email_id', 'Email id', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->profile_image_upload()) {
                $data_to_store = array(
                    'emp_name' => $this->input->post('emp_name'),
                    'emp_department' => $this->input->post('emp_department'),
                    'emp_designation' => $this->input->post('emp_designation'),
                    'emp_registration_id' => $this->input->post('emp_registration_id'),
                    'emp_location' => $this->input->post('emp_location'),
                    'emp_contact_no' => $this->input->post('emp_contact_no'),
                    'emp_email_id' => $this->input->post('emp_email_id'),
                    'emp_area_specialized' => $this->input->post('emp_area_specialized'),
                    'emp_languages' => $this->input->post('emp_languages'),
                    'emp_description' => $this->input->post('emp_description'),
                    'emp_profile_image' => (empty($this->upload_data) || !isset($this->upload_data['emp_profile_image'])) ? $this->input->post('emp_profile_image_hidden')  : $this->upload_data['emp_profile_image']['file_name'],
                    'emp_featured_agent' => ($this->input->post('emp_featured_agent') === null) ? 0 : 1
                );

                //if the insert has returned true then we show the flash message
                if ($this->Employee_model->update($id, $data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect('admin/employees');
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }

        $employees = $this->Employee_model->find_by_id($id);


        $data['employee'] = $employees == null ? [] : $employees[0];

         $data['designations'] = $this->Designation_model->find_all();
        $data['departments'] = $this->Department_model->find_all();

        //load the view
        $data['content'] = 'admin/employees/edit';
        $this->load->view('includes/admin_template', $data);
    }

    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete($id) {

        //product id 
        $this->Employee_model->delete($id);
        redirect('admin/employees');
    }

    function profile_image_upload() {
        
        if ($_FILES['emp_profile_image']['size'] == 0) {

            return true;
        } else {

            $upload_dir = './uploads/emp-profile';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config1['upload_path'] = $upload_dir;

            $config1['allowed_types'] = 'gif|jpg|png|jpeg';

            $date = new DateTime();

            $file_name = 'profile_' . $date->format('Y_m_d_H_i_s');

            $config1['file_name'] = $file_name;

            $config1['overwrite'] = false;

            $this->load->library('upload');

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('emp_profile_image')) {

                $this->form_validation->set_message('emp_profile_image', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['emp_profile_image'] = $this->upload->data();

                return true;
            }
        }
    }

}
