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

            //load the view
            $projects = $this->Project_model->find_with_search(PROJECT_COUNT_PER_PAGE, 0,$query_array=[], 'project_updated_at', 'desc');

            $data['projects'] = $projects;

            $data['content'] = 'public/project';
            $this->load->view('includes/public/template', $data);
        } else {
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
