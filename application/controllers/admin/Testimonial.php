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
class Testimonial extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Testimonial_model');
        $this->load->model('Employee_model');
        $this->load->model('Property_type_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index($sort_by = 'testimonial_id', $sort_order = 'desc', $offset = 0) {

         $limit = ADMIN_ITEM_PER_LIST_PAGE;

        //all the posts sent by the view
        $filter = $this->input->post('filter');
        $search_string = $this->input->post('search_string');

        $query_array = array(
            $filter => $search_string
        );

        $testimonials = $this->Testimonial_model->find_with_search($limit, $offset, $query_array, $sort_by, $sort_order);

        $data['testimonials'] = $testimonials;
        $data['sort_order'] = $sort_order;
        $data['sort_by'] = $sort_by;

        //pagination settings
        $config = array();
        $config['base_url'] = site_url("admin/testimonials/$sort_by/$sort_order");
        $config["total_rows"] = $this->Testimonial_model->record_count($query_array);
        $config["per_page"] = $limit;
        $config["uri_segment"] = 5;

        //initializate the panination helper 
        $this->pagination->initialize($config);
        

        //load the view
        $data['content'] = 'admin/testimonials/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('testimonial_author_name', 'Author Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_email', 'Author Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_contact', 'Author Contact', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_relation', 'Bridges & Allies Experience', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_message', 'Message', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->testimonial_image_upload()) {
                $data_to_store = array(
                    'testimonial_author_name' => $this->input->post('testimonial_author_name'),
                    'testimonial_author_email' => $this->input->post('testimonial_author_email'),
                    'testimonial_author_contact' => $this->input->post('testimonial_author_contact'),
                    'testimonial_author_relation' => $this->input->post('testimonial_author_relation'),
                    'testimonial_agent' => ($this->input->post('testimonial_agent') === null) ? 0 : $this->input->post('testimonial_agent'),
                    'testimonial_approved' => ($this->input->post('testimonial_approved') === null) ? 0 : 1,
                    'testimonial_message' => $this->input->post('testimonial_message'),
                    'testimonial_property_number' => $this->input->post('testimonial_property_number'),
                    'testimonial_property_name' => $this->input->post('testimonial_property_name'),
                    'testimonial_property_type' => ($this->input->post('testimonial_property_type') === null) ? 0 :$this->input->post('testimonial_property_type'),
                    'testimonial_property_location' => $this->input->post('testimonial_property_location'),
                    'testimonial_image' => (empty($this->upload_data) || !isset($this->upload_data['testimonial_image'])) ? "" : $this->upload_data['testimonial_image']['file_name'],
                    'testimonial_property_status' => ($this->input->post('testimonial_property_status') === null) ? 0 : $this->input->post('testimonial_property_status')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Testimonial_model->insert($data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }
        $data['employees'] = $this->Employee_model->find_all();
        $data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $data['content'] = 'admin/testimonials/add';
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
            $this->form_validation->set_rules('testimonial_author_name', 'Author Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_email', 'Author Email', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_contact', 'Author Contact', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_author_relation', 'Bridges & Allies Experience', 'trim|required|xss_clean');
            $this->form_validation->set_rules('testimonial_message', 'Message', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()&& $this->testimonial_image_upload()) {
                $data_to_store = array(
                   'testimonial_author_name' => $this->input->post('testimonial_author_name'),
                    'testimonial_author_email' => $this->input->post('testimonial_author_email'),
                    'testimonial_author_contact' => $this->input->post('testimonial_author_contact'),
                    'testimonial_author_relation' => $this->input->post('testimonial_author_relation'),
                    'testimonial_agent' => ($this->input->post('testimonial_agent') === null) ? 0 : $this->input->post('testimonial_agent'),
                    'testimonial_approved' => ($this->input->post('testimonial_approved') === null) ? 0 : 1,
                    'testimonial_message' => $this->input->post('testimonial_message'),
                    'testimonial_property_number' => $this->input->post('testimonial_property_number'),
                    'testimonial_property_name' => $this->input->post('testimonial_property_name'),
                    'testimonial_property_type' => ($this->input->post('testimonial_property_type') === null) ? 0 :$this->input->post('testimonial_property_type'),
                    'testimonial_property_location' => $this->input->post('testimonial_property_location'),
                    'testimonial_image' => (empty($this->upload_data) || !isset($this->upload_data['testimonial_image'])) ? $this->input->post('testimonial_image_hidden') : $this->upload_data['testimonial_image']['file_name'],
                    'testimonial_property_status' => ($this->input->post('testimonial_property_status') === null) ? 0 : $this->input->post('testimonial_property_status')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Testimonial_model->update($id, $data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect('admin/testimonials');
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }

        $testimonials = $this->Testimonial_model->find_by_id($id);


        $data['testimonial'] = $testimonials == null ? [] : $testimonials[0];
        $data['employees'] = $this->Employee_model->find_all();
        $data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $data['content'] = 'admin/testimonials/edit';
        $this->load->view('includes/admin_template', $data);
    }

    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete($id) {

        //product id 
        $this->Testimonial_model->delete($id);
        redirect('admin/testimonials');
    }

    function testimonial_image_upload() {

        if ($_FILES['testimonial_image']['size'] == 0) {

            return true;
        } else {

            $upload_dir = './uploads/testimonial';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config1['upload_path'] = $upload_dir;

            $config1['allowed_types'] = 'gif|jpg|png|jpeg';

            $date = new DateTime();

            $file_name = 'testimonial_' . $date->format('Y_m_d_H_i_s');

            $config1['file_name'] = $file_name;

            $config1['overwrite'] = false;

            $this->load->library('upload');

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('testimonial_image')) {

                $this->form_validation->set_message('testimonial_image', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['testimonial_image'] = $this->upload->data();

                return true;
            }
        }
    }

}
