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
class Property_owner extends PublicController {

    //put your code here
    //put your code here

    public function __construct() {
        parent::__construct();

        $this->load->library('image_lib');
        $this->load->model('Employee_model');
        $this->load->model('Property_type_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        $this->data['employees'] = $this->Employee_model->find_all();
        $this->data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $this->data['content'] = 'public/property_owner';
        $this->load->view('includes/public/template', $this->data);
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function ownersGuide() {

        //load the view
        $this->data['content'] = 'public/owners_guide';
        $this->load->view('includes/public/template', $this->data);
    }

}
