<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author DELL
 */
class Index extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->model('Project_model');
        $this->load->model('Project_thumbnail_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {
//all the posts sent by the view
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

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

        //load the view
        $projects = $this->Project_model->get_projects_with_search($search_string, $order, $order_type, $config['per_page'], $limit_end);


        $config['total_rows'] = $projects == null ? 0 : count($projects);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['projects'] = $projects;
        //load the view
        $data['content'] = 'public/index';
        $this->load->view('includes/public/template_home', $data);
    }

}
