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

                $data_to_store = array();

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
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/about_us';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function buyersGuide() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('buy_guide_selling_procedure', 'Selling Procedure', 'trim|xss_clean');
            $this->form_validation->set_rules('buy_guide_uae_property_law', 'UAE Propery Laws', 'trim|xss_clean');
            $this->form_validation->set_rules('buy_guide_why_we_are', 'Why B&A', 'trim|xss_clean');
            $this->form_validation->set_rules('buy_guide_faq', 'FAQ', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['buy_guide_selling_procedure'] = array(
                    'config_key' => 'buy_guide_selling_procedure',
                    'config_value' => $this->input->post('buy_guide_selling_procedure')
                );

                $data_to_store['buy_guide_uae_property_law'] = array(
                    'config_key' => 'buy_guide_uae_property_law',
                    'config_value' => $this->input->post('buy_guide_uae_property_law')
                );

                $data_to_store['buy_guide_why_we_are'] = array(
                    'config_key' => 'buy_guide_why_we_are',
                    'config_value' => $this->input->post('buy_guide_why_we_are')
                );

                $data_to_store['buy_guide_faq'] = array(
                    'config_key' => 'buy_guide_faq',
                    'config_value' => $this->input->post('buy_guide_faq')
                );



                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/buyers_guide';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function tenantsGuide() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('ten_guide_renting_procedure', 'Renting Procedure', 'trim|xss_clean');
            $this->form_validation->set_rules('ten_guide_uae_property_law', 'UAE Propery Laws', 'trim|xss_clean');
            $this->form_validation->set_rules('ten_guide_why_we_are', 'Why B&A', 'trim|xss_clean');
            $this->form_validation->set_rules('ten_guide_faq', 'FAQ', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['ten_guide_renting_procedure'] = array(
                    'config_key' => 'ten_guide_renting_procedure',
                    'config_value' => $this->input->post('ten_guide_renting_procedure')
                );

                $data_to_store['ten_guide_uae_property_law'] = array(
                    'config_key' => 'ten_guide_uae_property_law',
                    'config_value' => $this->input->post('ten_guide_uae_property_law')
                );

                $data_to_store['ten_guide_why_we_are'] = array(
                    'config_key' => 'ten_guide_why_we_are',
                    'config_value' => $this->input->post('ten_guide_why_we_are')
                );

                $data_to_store['ten_guide_faq'] = array(
                    'config_key' => 'ten_guide_faq',
                    'config_value' => $this->input->post('ten_guide_faq')
                );



                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/tenants_guide';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function ownersGuide() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('own_guide_selling_process', 'Selling Process', 'trim|xss_clean');
            $this->form_validation->set_rules('own_guide_leasing_process', 'Leasing Process', 'trim|xss_clean');
            $this->form_validation->set_rules('own_guide_why_we_are', 'Why B&A', 'trim|xss_clean');
            $this->form_validation->set_rules('own_guide_faq', 'FAQ', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['own_guide_selling_process'] = array(
                    'config_key' => 'own_guide_selling_process',
                    'config_value' => $this->input->post('own_guide_selling_process')
                );

                $data_to_store['own_guide_leasing_process'] = array(
                    'config_key' => 'own_guide_leasing_process',
                    'config_value' => $this->input->post('own_guide_leasing_process')
                );

                $data_to_store['own_guide_why_we_are'] = array(
                    'config_key' => 'own_guide_why_we_are',
                    'config_value' => $this->input->post('own_guide_why_we_are')
                );

                $data_to_store['own_guide_faq'] = array(
                    'config_key' => 'own_guide_faq',
                    'config_value' => $this->input->post('own_guide_faq')
                );



                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/owners_guide';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function infoGuide() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('info_guide_dubai', 'Info Guide Dubai', 'trim|xss_clean');
            $this->form_validation->set_rules('info_guide_news_and_reports', 'News & Reports', 'trim|xss_clean');
            $this->form_validation->set_rules('info_guide_investor_visa', 'Investor Visa', 'trim|xss_clean');
            $this->form_validation->set_rules('info_guide_rera_updates', 'RERA Updates', 'trim|xss_clean');
            $this->form_validation->set_rules('info_guide_faq', 'FAQs', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['info_guide_dubai'] = array(
                    'config_key' => 'info_guide_dubai',
                    'config_value' => $this->input->post('info_guide_dubai')
                );

                $data_to_store['info_guide_news_and_reports'] = array(
                    'config_key' => 'info_guide_news_and_reports',
                    'config_value' => $this->input->post('info_guide_news_and_reports')
                );

                $data_to_store['info_guide_investor_visa'] = array(
                    'config_key' => 'info_guide_investor_visa',
                    'config_value' => $this->input->post('info_guide_investor_visa')
                );

                $data_to_store['info_guide_rera_updates'] = array(
                    'config_key' => 'info_guide_rera_updates',
                    'config_value' => $this->input->post('info_guide_rera_updates')
                );

                $data_to_store['info_guide_faq'] = array(
                    'config_key' => 'info_guide_faq',
                    'config_value' => $this->input->post('info_guide_faq')
                );



                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/info_guide';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function careerGuide() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('career_guide_description', 'Career Guide', 'trim|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['career_guide_description'] = array(
                    'config_key' => 'career_guide_description',
                    'config_value' => $this->input->post('career_guide_description')
                );

                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/career_guide';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function contactUs() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('contact_us_address', 'Address', 'required|trim|xss_clean');
            $this->form_validation->set_rules('contact_us_email', 'Email', 'required|trim|xss_clean');
            $this->form_validation->set_rules('contact_us_contact_no', 'Contact No', 'required|trim|xss_clean');
            $this->form_validation->set_rules('contact_us_location', 'Location map url', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $data_to_store['contact_us_address'] = array(
                    'config_key' => 'contact_us_address',
                    'config_value' => $this->input->post('contact_us_address', TRUE)
                );

                $data_to_store['contact_us_email'] = array(
                    'config_key' => 'contact_us_email',
                    'config_value' => $this->input->post('contact_us_email', TRUE)
                );

                $data_to_store['contact_us_contact_no'] = array(
                    'config_key' => 'contact_us_contact_no',
                    'config_value' => $this->input->post('contact_us_contact_no', TRUE)
                );

                $data_to_store['contact_us_opening_hours'] = array(
                    'config_key' => 'contact_us_opening_hours',
                    'config_value' => $this->input->post('contact_us_opening_hours', TRUE)
                );

                $data_to_store['contact_us_location'] = array(
                    'config_key' => 'contact_us_location',
                    'config_value' => $this->input->post('contact_us_location', TRUE)
                );

                $data_to_store['contact_us_facebook'] = array(
                    'config_key' => 'contact_us_facebook',
                    'config_value' => $this->input->post('contact_us_facebook', TRUE)
                );

                $data_to_store['contact_us_twitter'] = array(
                    'config_key' => 'contact_us_twitter',
                    'config_value' => $this->input->post('contact_us_twitter', TRUE)
                );

                $data_to_store['contact_us_linked_in'] = array(
                    'config_key' => 'contact_us_linked_in',
                    'config_value' => $this->input->post('contact_us_linked_in', TRUE)
                );

                $data_to_store['contact_us_instagram'] = array(
                    'config_key' => 'contact_us_instagram',
                    'config_value' => $this->input->post('contact_us_instagram', TRUE)
                );

                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view



        $data['configurations'] = $this->Configuration_model->find_as_key_map();
        //load the view
        $data['content'] = 'admin/configurations/contact_us';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function settings() {
        $this->load->library('encryption');

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('admin_email', 'Admin Email', 'trim|xss_clean');
            $this->form_validation->set_rules('mailserver_login', 'Username', 'trim|xss_clean');
            $this->form_validation->set_rules('mailserver_password', 'Password', 'trim|xss_clean');
            $this->form_validation->set_rules('mailserver_url', 'SMTP Host', 'trim|xss_clean');
            $this->form_validation->set_rules('mailserver_port', 'SMTP port', 'required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run()) {

                $data_to_store = array();

                $password = $this->input->post('mailserver_password', TRUE);

                $data_to_store['admin_email'] = array(
                    'config_key' => 'admin_email',
                    'config_value' => $this->input->post('admin_email', TRUE)
                );
                
                $data_to_store['mailserver_login'] = array(
                    'config_key' => 'mailserver_login',
                    'config_value' => $this->input->post('mailserver_login', TRUE)
                );

                $data_to_store['mailserver_password'] = array(
                    'config_key' => 'mailserver_password',
                    'config_value' => $this->encryption->encrypt($password)
                );

                $data_to_store['mailserver_url'] = array(
                    'config_key' => 'mailserver_url',
                    'config_value' => $this->input->post('mailserver_url', TRUE)
                );

                $data_to_store['mailserver_port'] = array(
                    'config_key' => 'mailserver_port',
                    'config_value' => $this->input->post('mailserver_port', TRUE)
                );

                $data_to_store['mailserver_tls_or_ssl'] = array(
                    'config_key' => 'mailserver_tls_or_ssl',
                    'config_value' => ($this->input->post('mailserver_tls_or_ssl') === null) ? 'no' : 'yes',
                );


                //if the insert has returned true then we show the flash message
                if ($this->Configuration_model->insert_multiple($data_to_store)) {

                    $this->session->set_flashdata('flash_message', TRUE);
                    //redirect(current_url());
                } else {
                    $this->session->set_flashdata('flash_message', FALSE);
                }
            }
        }

        //load the view

        $configurations = $this->Configuration_model->find_as_key_map();

        $password = ($configurations && array_key_exists('mailserver_password', $configurations)) ? $this->encryption->decrypt($configurations['mailserver_password']) : '';

        if ($configurations) {

            $configurations['mailserver_password'] = $password;
        }

        $data['configurations'] = $configurations;



        //load the view
        $data['content'] = 'admin/configurations/settings';

        $this->load->view('includes/admin_template', $data);
    }

    

}
