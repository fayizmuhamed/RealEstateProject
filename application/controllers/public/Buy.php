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
class Buy extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
       
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {


       //load the view
        $data['content'] = 'public/buy';
        $this->load->view('includes/public/template', $data);
    }
    
    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyDetails() {

       
        //load the view
        $data['content'] = 'public/buy_detail';
        $this->load->view('includes/public/template', $data);
        
    }
    
    
    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function buyersGuide() {

        //load the view
        $data['content'] = 'public/buyers_guide';
        $this->load->view('includes/public/template', $data);
    }
}
