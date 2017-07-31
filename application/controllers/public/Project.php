<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Project
 *
 * @author DELL
 */
class Project extends PublicController {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Project_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index($id = null) {

        if ($id == null) {

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
            $offset = ($page * $config['per_page']) - $config['per_page'];
            if ($offset < 0) {
                $offset = 0;
            }

            //load the view
            $projects = $this->Project_model->find_with_search($config['per_page'], $offset,$search_string, $order, $order_type);


            $config['total_rows'] = $projects == null ? 0 : count($projects);

            //initializate the panination helper 
            $this->pagination->initialize($config);

            $data['projects'] = $projects;

            $data['content'] = 'public/project';
            $this->load->view('includes/public/template', $data);
        } else {
//load the view
            $project = $this->Project_model->find_by_id($id);

            $data['project'] = $project;
            $data['project_thumbnails'] = $this->Project_thumbnail_model->find_all($id);
            //load the view
            $data['content'] = 'public/project_detail';
            $this->load->view('includes/public/template', $data);
        }
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function view() {

        //load the view
        $data['content'] = 'public/project_detail';
        $this->load->view('includes/public/template', $data);
    }

}
