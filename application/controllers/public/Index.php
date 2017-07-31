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
class Index extends PublicController {

    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->model('Project_model');
        $this->load->model('Community_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        
       // $data['configurations'] = $this->Configuration_model->find_as_key_map();

        $data['projects'] = $this->Project_model->find_latest_with_limit(INDEX_PAGE_PROJECT_COUNT);
        $data['communities'] = $this->Community_model->find_with_search(INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE, 0, NULL, NULL, NULL);
        //load the view
        $data['content'] = 'public/index';
        $this->load->view('includes/public/template_home', $data);
    }

    
    function infoGuide(){
        //load the view
        $data['content'] = 'public/info_guide';
        $this->load->view('includes/public/template', $data);
    }
    
}
