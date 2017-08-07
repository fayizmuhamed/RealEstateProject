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
    public function index($sort_by = 'emp_id', $sort_order = 'desc', $offset = 0) {

         $limit = ADMIN_ITEM_PER_LIST_PAGE;

        //all the posts sent by the view
        $filter = $this->input->post('filter');
        $search_string = $this->input->post('search_string');

        $query_array = array(
            $filter => $search_string
        );

        $employees = $this->Employee_model->find_with_search($limit, $offset, $query_array, $sort_by, $sort_order);

        $data['employees'] = $employees;
        $data['sort_order'] = $sort_order;
        $data['sort_by'] = $sort_by;

        //pagination settings
        $config = array();
        $config['base_url'] = site_url("admin/employees/$sort_by/$sort_order");
        $config["total_rows"] = $this->Employee_model->record_count($query_array);
        $config["per_page"] = $limit;
        $config["uri_segment"] = 5;

        //initializate the panination helper 
        $this->pagination->initialize($config);
        
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

    public function search_ajax() {

        $json = [];
        
        $filter= $this->input->get('filter');
        $search_string = $this->input->get('search_string');
        
        $json = $this->Employee_model->find_for_dropdown( $filter, $search_string);

        echo json_encode($json);
    }
}
