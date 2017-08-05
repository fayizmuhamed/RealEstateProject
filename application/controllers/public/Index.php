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
        $this->load->model('Employee_model');
        $this->load->model('Property_model');
        $this->load->model('Testimonial_model');
    }

    /**
     * Check if the user is logged in, if he's not, 
     * send him to the login page
     * @return void
     */
    function index() {

        
       // $data['configurations'] = $this->Configuration_model->find_as_key_map();

        $data['projects'] = $this->Project_model->find_latest_with_limit(INDEX_PAGE_PROJECT_COUNT);
        $data['testimonials'] = $this->Testimonial_model->find_with_search(INDEX_PAGE_TESTIMONIAL_COUNT, 0, NULL,NULL, 'testimonial_updated_at', 'DESC');
        $data['communities'] = $this->Community_model->find_with_search(INDEX_PAGE_COMMUNITIES_COUNT_PER_PAGE, 0, NULL, NULL, NULL);
        $data['featured_sales'] = $this->Property_model->fetch_featured_property_for_sale();
        $data['featured_rents'] = $this->Property_model->fetch_featured_property_for_rent();
        $data['employees'] = $this->Employee_model->find_with_search(FEATURED_AGENT_COUNT, 0,'emp_featured_agent',1, 'emp_updated_at', 'DESC');
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
