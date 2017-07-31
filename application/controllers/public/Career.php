<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Team
 *
 * @author DELL
 */
class Career extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Opportunity_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        $data['opportunities'] = $this->Opportunity_model->find_all();
        //load the view
        $data['content'] = 'public/career';
        $this->load->view('includes/public/template', $data);
    }
    
    function drop_my_cv(){
        
        $from=$this->configurations['admin_email'];
    }

}
