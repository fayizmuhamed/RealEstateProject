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
    public function index($sort_by = 'dep_id', $sort_order = 'desc', $offset = 0) {

        $limit = ADMIN_ITEM_PER_LIST_PAGE;

        //all the posts sent by the view
        $filter = $this->input->post('filter');
        $search_string = $this->input->post('search_string');

        $query_array = array(
            $filter => $search_string
        );

        $departments = $this->Department_model->find_with_search($limit, $offset, $query_array, $sort_by, $sort_order);

        $data['departments'] = $departments;
        $data['sort_order'] = $sort_order;
        $data['sort_by'] = $sort_by;

        //pagination settings
        $config = array();
        $config['base_url'] = site_url("admin/departments/$sort_by/$sort_order");
        $config["total_rows"] = $this->Department_model->record_count($query_array);
        $config["per_page"] = $limit;
        $config["uri_segment"] = 5;

        //initializate the panination helper 
        $this->pagination->initialize($config);

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
            if ($this->form_validation->run()) {
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
