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
class Department extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Department_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {

        //all the posts sent by the view
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/departments';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * $config['per_page']) - $config['per_page'];
        if ($offset < 0) {
            $offset = 0;
        }

        $departments = $this->Department_model->find_with_search($config['per_page'], $offset, $search_string, $order, $order_type);


        $config['total_rows'] = $departments == null ? 0 : count($departments);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['departments'] = $departments;

        //load the view
        $data['content'] = 'admin/departments/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('dep_name', 'Name', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'dep_name' => $this->input->post('dep_name')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Department_model->insert($data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }
        //load the view
        $data['content'] = 'admin/departments/add';
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
            $this->form_validation->set_rules('dep_name', 'Name', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() ) {
                $data_to_store = array(
                    'dep_name' => $this->input->post('dep_name'),
                );

                //if the insert has returned true then we show the flash message
                if ($this->Department_model->update($id, $data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect('admin/departments');
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }

        $departments = $this->Department_model->find_by_id($id);


        $data['department'] = $departments == null ? [] : $departments[0];

        //load the view
        $data['content'] = 'admin/departments/edit';
        $this->load->view('includes/admin_template', $data);
    }

    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete($id) {

        //product id 
        $this->Department_model->delete($id);
        redirect('admin/departments');
    }

}
