<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projects
 *
 * @author DELL
 */
class Project extends CI_Controller {
//put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Project_model');
        if (!$this->session->userdata('is_logged_in')) {
            redirect('admin/login');
        }
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/projects';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $limit_end = ($page * $config['per_page']) - $config['per_page'];
        if ($limit_end < 0) {
            $limit_end = 0;
        }

        $config['total_rows'] = 100;

        //initializate the panination helper 
        $this->pagination->initialize($config);
        
        //load the view
        $data['content'] = 'admin/projects/list';
        
        $this->load->view('includes/admin_template', $data);
    }

//index

    public function add() {
        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_developer', 'Project Developer', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_location', 'Project location', 'trim|required|xss_clean');
            $this->form_validation->set_rules('property_type', 'Propert Type', 'trim|required|xss_clean');
            $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required|xss_clean');
            $this->form_validation->set_rules('expected_end_date', 'Expected End Date', 'trim|required|xss_clean');
            
            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'project_name' => $this->input->post('project_name'),
                    'project_developer' => $this->input->post('project_developer'),
                    'project_location' => $this->input->post('project_location'),
                    'property_type' => $this->input->post('property_type'),
                    'start_date' => $this->input->post('start_date'),
                    'expected_end_date' => $this->input->post('expected_end_date'),
                    'description' => $this->input->post('description')
                );
                //if the insert has returned true then we show the flash message
                if ($this->Project_model->insert_project($data_to_store)) {
                    $data['flash_message'] = TRUE;
                } else {
                    $data['flash_message'] = FALSE;
                }
            }
        }
        
        //load the view
        $data['content'] = 'admin/projects/add';
        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Update item by his id
     * @return void
     */
    public function update() {
//product id 
        $id = $this->uri->segment(4);

//if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
//form validation
            $this->form_validation->set_rules('description', 'description', 'required');
            $this->form_validation->set_rules('stock', 'stock', 'required|numeric');
            $this->form_validation->set_rules('cost_price', 'cost_price', 'required|numeric');
            $this->form_validation->set_rules('sell_price', 'sell_price', 'required|numeric');
            $this->form_validation->set_rules('manufacture_id', 'manufacture_id', 'required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
//if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array(
                    'description' => $this->input->post('description'),
                    'stock' => $this->input->post('stock'),
                    'cost_price' => $this->input->post('cost_price'),
                    'sell_price' => $this->input->post('sell_price'),
                    'manufacture_id' => $this->input->post('manufacture_id')
                );
//if the insert has returned true then we show the flash message
                if ($this->Project_model->update_project($id, $data_to_store) == TRUE) {
                    $this->session->set_flashdata('flash_message', 'updated');
                } else {
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                redirect('admin/products/update/' . $id . '');
            }//validation run
        }
//if we are updating, and the data did not pass trough the validation
//the code below wel reload the current data
//product data 
        $data['product'] = $this->products_model->get_product_by_id($id);
//fetch manufactures data to populate the select field
        $data['manufactures'] = $this->manufacturers_model->get_manufacturers();
//load the view
        $data['main_content'] = 'admin/products/edit';
        $this->load->view('includes/template', $data);
    }

//update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete() {
//product id 
        $id = $this->uri->segment(4);
        $this->products_model->delete_product($id);
        redirect('admin/products');
    }

}
