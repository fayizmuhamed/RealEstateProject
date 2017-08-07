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
class Opportunity extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Opportunity_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index($sort_by = 'opportunity_id', $sort_order = 'desc', $offset = 0) {

        $limit = ADMIN_ITEM_PER_LIST_PAGE;

        //all the posts sent by the view
        $filter = $this->input->post('filter');
        $search_string = $this->input->post('search_string');

        $query_array = array(
            $filter => $search_string
        );

        $opportunities = $this->Opportunity_model->find_with_search($limit, $offset, $query_array, $sort_by, $sort_order);

        $data['opportunities'] = $opportunities;
        $data['sort_order'] = $sort_order;
        $data['sort_by'] = $sort_by;

        //pagination settings
        $config = array();
        $config['base_url'] = site_url("admin/opportunities/$sort_by/$sort_order");
        $config["total_rows"] = $this->Opportunity_model->record_count($query_array);
        $config["per_page"] = $limit;
        $config["uri_segment"] = 5;

        //initializate the panination helper 
        $this->pagination->initialize($config);

        //load the view
        $data['content'] = 'admin/opportunities/list';

        $this->load->view('includes/admin_template', $data);
    }

    public function add() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('opportunity_title', 'Title', 'trim|required|xss_clean');
            $this->form_validation->set_rules('opportunity_location', 'Location', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'opportunity_title' => $this->input->post('opportunity_title'),
                    'opportunity_location' => $this->input->post('opportunity_location'),
                    'opportunity_sub_location' => $this->input->post('opportunity_sub_location'),
                    'opportunity_description' => $this->input->post('opportunity_description')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Opportunity_model->insert($data_to_store)) {
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
        $data['content'] = 'admin/opportunities/add';
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
            $this->form_validation->set_rules('opportunity_title', 'Title', 'trim|required|xss_clean');
            $this->form_validation->set_rules('opportunity_location', 'Location', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {
                $data_to_store = array(
                    'opportunity_title' => $this->input->post('opportunity_title'),
                    'opportunity_location' => $this->input->post('opportunity_location'),
                    'opportunity_sub_location' => $this->input->post('opportunity_sub_location'),
                    'opportunity_description' => $this->input->post('opportunity_description')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Opportunity_model->update($id, $data_to_store)) {
                    $this->session->set_flashdata('flash_message', TRUE);
                    redirect('admin/opportunities');
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            } else {
                $this->session->set_flashdata('flash_message', FALSE);
            }
        }

        $opportunities = $this->Opportunity_model->find_by_id($id);


        $data['opportunity'] = $opportunities == null ? [] : $opportunities[0];

        //load the view
        $data['content'] = 'admin/opportunities/edit';
        $this->load->view('includes/admin_template', $data);
    }

    //update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete($id) {

        //product id 
        $this->Opportunity_model->delete($id);
        redirect('admin/opportunities');
    }

}
