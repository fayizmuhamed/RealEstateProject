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
        $this->load->model('Configuration_model');
    }
    
    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function about() {
        
         //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('about_us_who_we_are', 'Who we are', 'trim|xss_clean');
            $this->form_validation->set_rules('about_us_vision', 'Vision', 'trim|xss_clean');
            $this->form_validation->set_rules('about_us_mission', 'Mission', 'trim|xss_clean');
            $this->form_validation->set_rules('about_us_value', 'Value', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store=array();

                $data_to_store['about_us_who_we_are'] = array(
                    'config_key' => 'about_us_who_we_are',
                    'config_value' => $this->input->post('about_us_who_we_are')
                );
                
                $data_to_store['about_us_vision'] = array(
                    'config_key' => 'about_us_vision',
                    'config_value' => $this->input->post('about_us_vision')
                );
                
                $data_to_store['about_us_mission'] = array(
                    'config_key' => 'about_us_mission',
                    'config_value' => $this->input->post('about_us_mission')
                );
                
                $data_to_store['about_us_value'] = array(
                    'config_key' => 'about_us_value',
                    'config_value' => $this->input->post('about_us_value')
                );
                
                
                
                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple_configaurations($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view

        
        
        $data['configurations'] = $this->Configuration_model->get_configurations_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/about-us';

        $this->load->view('includes/admin_template', $data);
    }
}
