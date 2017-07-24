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
        $this->load->model('Community_model');
        $this->load->model('Configuration_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        
        $data['configurations'] = $this->Configuration_model->get_configurations_as_key_map();

        $data['projects'] = $this->Project_model->get_latest_projects(5);
        $data['communities'] = $this->Community_model->get_communities_with_search(INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE, 0, NULL, 'community_updated_at', 'DESC');
        //load the view
        $data['content'] = 'public/index';
        $this->load->view('includes/public/template_home', $data);
    }

}
