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
        $this->load->model('Employee_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index($id = null) {

        if ($id == null) {

            //load the view
            $projects = $this->Project_model->find_project_with_priority(PROJECT_COUNT_PER_PAGE, 0, $query_array = []);

            $this->data['projects'] = $projects;

            $this->data['content'] = 'public/project';

            $this->load->view('includes/public/template', $this->data);
        } else {
            $project = $this->Project_model->find_by_id($id);


            if ($project) {
                $project_agents = isset($project[0]['project_agents']) ? json_decode($project[0]['project_agents'], true) : array();

                $this->data['employees'] = $this->Employee_model->find_by_ids(PROJECT_PAGE_EMPLOYEES_COUNT_PER_PAGE, 0, $project_agents);
            }

            //$agents=($project&&isset($project[0]));

            $this->data['project'] = $project == null ? [] : $project[0];

            $this->data['project_thumbnails'] = $this->Project_thumbnail_model->find_all($id);
            //load the view
            $this->data['content'] = 'public/project_detail';

            $this->load->view('includes/public/template', $this->data);
        }
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function view() {

        //load the view
        $this->data['content'] = 'public/project_detail';
        $this->load->view('includes/public/template', $this->data);
    }

    public function findProjectAgents() {

        $project_id = $this->input->get('project');

        $page = $this->input->get('page', TRUE);

        //math to get the initial record to be select in the database
        $offset = ($page * PROJECT_PAGE_EMPLOYEES_COUNT_PER_PAGE) - PROJECT_PAGE_EMPLOYEES_COUNT_PER_PAGE;
        if ($offset < 0) {
            $offset = 0;
        }

        $project = $this->Project_model->find_by_id($project_id);

        $employees=[];

        if ($project) {
            
            $project_agents = isset($project[0]['project_agents']) ? json_decode($project[0]['project_agents'], true) : array();

            $employees = $this->Employee_model->find_by_ids(PROJECT_PAGE_EMPLOYEES_COUNT_PER_PAGE, $offset, $project_agents);
        }

        exit($this->send_response('success', $employees));
    }

}
