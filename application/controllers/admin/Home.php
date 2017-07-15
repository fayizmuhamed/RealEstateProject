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
class Home extends AdminController{
    //put your code here
    
     public function __construct() {
        parent::__construct();
        
    }
    
    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        //load the view
        $data['content'] = 'admin/home';
        $this->load->view('includes/admin_template', $data);  
    }
}
