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
class Property_type extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Property_type_model');
        $this->load->model('Property_model_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {

        //all the posts sent by the view
        $property_model_id = $this->uri->segment(3);
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/propertytypes';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * $config['per_page']) - $config['per_page'];
        if ($offset < 0) {
            $offset = 0;
        }

        $property_types = $this->Property_type_model->find_with_search($config['per_page'], $offset,$property_model_id, $search_string, $order, $order_type );


        $config['total_rows'] = $property_types == null ? 0 : count($property_types);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['property_types'] = $property_types;

        //load the view
        $data['content'] = 'admin/property_types/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('property_type_name', 'Property type name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('property_type_model', 'Parent', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'pt_name' => $this->input->post('property_type_name'),
                    'pt_model_id' => $this->input->post('property_type_model')
                );
                
                //if the insert has returned true then we show the flash message
                if ($this->Property_type_model->insert($data_to_store)) {
                    $data['flash_message'] = TRUE;
                } else {
                    $data['flash_message'] = FALSE;
                }
            }
        }

        $data['property_models'] = $this->Property_model_model->find_all();


        //load the view
        $data['content'] = 'admin/property_types/add';
        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Update item by his id
     * @return void
     */
    public function update() {
        
        //property_type_id 
        $id = $this->uri->segment(4);

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            
            //form validation
            $this->form_validation->set_rules('property_type_name', 'Property type name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('property_type_model', 'Parent', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array(
                    'pt_name' => $this->input->post('property_type_name'),
                    'pt_model_id' => $this->input->post('property_type_model')
                );
                
                //if the insert has returned true then we show the flash message
                if ($this->Property_type_model->update($id, $data_to_store) == TRUE) {
                    
                    $this->session->set_flashdata('flash_message', 'updated');
                    
                } else {
                    
                    $this->session->set_flashdata('flash_message', 'not_updated');
                }
                
                redirect('admin/propertytypes');
            }//validation run
        }
        
        //if we are updating, and the data did not pass trough the validation
        //the code below wel reload the current data
        //product data 
        $data['property_type'] = $this->Property_type_model->find_by_id($id);
        
        $data['property_models'] = $this->Property_model_model->find_all();

        //load the view
        //load the view
        $data['content'] = 'admin/property_types/edit';
        $this->load->view('includes/admin_template', $data);
    }
    
    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete() {
        
        //product id 
        $id = $this->uri->segment(4);
        $this->Property_type_model->delete($id);
        redirect('admin/propertytypes');
    }

}
