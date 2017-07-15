<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of projects
 *
 * @author DELL
 */
class Configuration extends AdminController {
//put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Property_type_model');
        $this->load->model('Project_model');
        $this->load->model('Project_thumbnail_model');
    }
    
    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function about() {
        
        //load the view
        $data['content'] = 'admin/configurations/about-us';

        $this->load->view('includes/admin_template', $data);
    }
}
