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
class Project extends AdminController {
//put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Property_type_model');
        $this->load->model('Project_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index() {

        //all the posts sent by the view
        $search_string = $this->input->post('search_string');
        $order = $this->input->post('order');
        $order_type = $this->input->post('order_type');

        //pagination settings
        $config['per_page'] = 20;
        $config['base_url'] = base_url() . 'admin/projects';
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 20;

        //limit end
        $page = $this->uri->segment(3);

        //math to get the initial record to be select in the database
        $offset = ($page * $config['per_page']) - $config['per_page'];
        if ($offset < 0) {
            $offset = 0;
        }

        $projects = $this->Project_model->find_with_search($config['per_page'], $offset, $search_string, $order, $order_type);


        $config['total_rows'] = $projects == null ? 0 : count($projects);

        //initializate the panination helper 
        $this->pagination->initialize($config);

        $data['projects'] = $projects;

        //load the view
        $data['content'] = 'admin/projects/list';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Function to load add new project page
     */
    public function add() {

        //load the view

        $data['property_types'] = $this->Property_type_model->find_all();
        $data['content'] = 'admin/projects/add';
        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Function to load project editing page
     */
    public function edit($id) {

        
        //project data 
        $data['project_thumbnails'] = $this->Project_thumbnail_model->find_all($id);
        $data['property_types'] = $this->Property_type_model->find_all();
        $projects = $this->Project_model->find_by_id($id);
        $data['project'] = $projects == null ? [] : $projects[0];


        //load the view
        $data['content'] = 'admin/projects/edit';
        $this->load->view('includes/admin_template', $data);
    }

    public function save() {


        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            //form validation
            $this->form_validation->set_rules('project_reference', 'Project Number', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_developer', 'Project Developer', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_location', 'Project location', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_property_type', 'Propert Type', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_start_date', 'Start Date', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_end_date', 'End Date', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->do_upload()) {

                $data_to_store = array(
                    'project_reference' => $this->input->post('project_reference'),
                    'project_name' => $this->input->post('project_name'),
                    'project_developer' => $this->input->post('project_developer'),
                    'project_location' => $this->input->post('project_location'),
                    'project_property_type' => $this->input->post('project_property_type'),
                    'project_no_of_bedrooms' => $this->input->post('project_no_of_bedrooms'),
                    'project_start_price' => $this->input->post('project_start_price'),
                    'project_start_date' => date('Y-m-d', strtotime($this->input->post('project_start_date'))),
                    'project_end_date' => date('Y-m-d', strtotime($this->input->post('project_end_date'))),
                    'project_description' => $this->input->post('project_description'),
                    'project_cover_image' => (empty($this->upload_data) || !isset($this->upload_data['project_cover_image'])) ? "" : $this->upload_data['project_cover_image']['file_name'],
                    'project_brochure' => (empty($this->upload_data) || !isset($this->upload_data['project_brochure'])) ? "" : $this->upload_data['project_brochure']['file_name'],
                    'project_floor_plan' => (empty($this->upload_data) || !isset($this->upload_data['project_floor_plan'])) ? "" : $this->upload_data['project_floor_plan']['file_name'],
                    'project_payment_plans' => $this->input->post('project_payment_plan_hidden')
                );

                $thumbnail = (empty($this->upload_data) || !isset($this->upload_data['project_thumbnail_image'])) ? "" : $this->upload_data['project_thumbnail_image'];

                //if the insert has returned true then we show the flash message
                if ($this->Project_model->insert($data_to_store, $thumbnail)) {
                    $status = 'success';
                    $message = 'New project created successfully';
                } else {
                    $status = 'failed';
                    $message = 'New project creation failed';
                }
            } else {
                $status = 'failed';
                $message = validation_errors();
            }

            if ($this->input->is_ajax_request()) {

                exit($this->send_response($status, $message));
            }

//            else {
//                $this->session->set_flashdata('flash_message', $status);
//                redirect(current_url());
//            }
        }
    }

    /**
     * Update item by his id
     * @return void
     */
    public function update() {


        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {

            //form validation
            $this->form_validation->set_rules('project_reference', 'Project Number', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_name', 'Project Name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_developer', 'Project Developer', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_location', 'Project location', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_property_type', 'Propert Type', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_start_date', 'Start Date', 'trim|required|xss_clean');
            $this->form_validation->set_rules('project_end_date', 'End Date', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->do_upload()) {

                //project id 
                $id = $this->input->post('project_id');

                $data_to_store = array(
                    'project_reference' => $this->input->post('project_reference'),
                    'project_name' => $this->input->post('project_name'),
                    'project_developer' => $this->input->post('project_developer'),
                    'project_location' => $this->input->post('project_location'),
                    'project_property_type' => $this->input->post('project_property_type'),
                    'project_no_of_bedrooms' => $this->input->post('project_no_of_bedrooms'),
                    'project_start_price' => $this->input->post('project_start_price'),
                    'project_start_date' => date('Y-m-d', strtotime($this->input->post('project_start_date'))),
                    'project_end_date' => date('Y-m-d', strtotime($this->input->post('project_end_date'))),
                    'project_description' => $this->input->post('project_description'),
                    'project_cover_image' => (empty($this->upload_data) || !isset($this->upload_data['project_cover_image'])) ? $this->input->post('project_cover_image_hidden') : $this->upload_data['project_cover_image']['file_name'],
                    'project_brochure' => (empty($this->upload_data) || !isset($this->upload_data['project_brochure'])) ? $this->input->post('project_brochure_hidden') : $this->upload_data['project_brochure']['file_name'],
                    'project_floor_plan' => (empty($this->upload_data) || !isset($this->upload_data['project_floor_plan'])) ? $this->input->post('project_floor_plan_hidden') : $this->upload_data['project_floor_plan']['file_name'],
                    'project_payment_plans' => $this->input->post('project_payment_plan_hidden')
                );

                $thumbnail = (empty($this->upload_data) || !isset($this->upload_data['project_thumbnail_image'])) ? "" : $this->upload_data['project_thumbnail_image'];


                //if the insert has returned true then we show the flash message
                if ($this->Project_model->update($id, $data_to_store, $thumbnail)) {
                    $status = 'success';
                    $message = 'Project updated successfully';
                } else {
                    $status = 'failed';
                    $message = 'Project updation failed';
                }
            } else {
                $status = 'failed';
                $message = validation_errors();
            }

            if ($this->input->is_ajax_request()) {

                exit($this->send_response($status, $message));
            }
//            else {
//                $this->session->set_flashdata('flash_message', $status);
//                redirect('admin/projects');
//            }
        }
    }

//update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete() {

        $id = $this->uri->segment(4);

        //if the insert has returned true then we show the flash message
        if ($this->Project_model->delete($id)) {
            $status = 'success';
            $message = 'Project deleted successfully';
            redirect('admin/projects');
        } else {
            $status = 'failed';
            $message = 'Project deletion failed';
        }
    }

    /**
     * Delete project thumbnail by his id
     * @return void
     */
    public function deleteProjectThumbnail($project_thumbnail_id) {

        $this->db->trans_start(); # Starting Transaction

        $this->db->trans_strict(FALSE);

        $this->Project_thumbnail_model->delete($project_thumbnail_id);

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $status = 'failed';
            $message = 'Project thumbnail deletion failed';
        } else {
            $status = 'success';
            $message = 'Project thumbnail deletion success';
        }

        if ($this->input->is_ajax_request()) {

            exit($this->send_response($status, $message));
        }
    }

    function do_upload() {

        $upload_dir = './uploads';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config['upload_path'] = $upload_dir;

        $config['allowed_types'] = 'gif|jpg|png|jpeg';

        $config['overwrite'] = false;

        $this->load->library('upload', $config);

        if (!$this->project_cover_image_upload()) {

            return false;
        }

        if (!$this->project_thumbnail_upload()) {

            return false;
        }

        if (!$this->project_brochure_upload()) {

            return false;
        }

        if (!$this->project_floor_plan_upload()) {

            return false;
        }

        return true;
    }

    function project_cover_image_upload() {

        if ($_FILES['project_cover_image']['size'] != 0) {

            $upload_dir = './uploads/project/cover';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config1['upload_path'] = $upload_dir;

            $config1['allowed_types'] = 'gif|jpg|png|jpeg';

            $date = new DateTime();

            $file_name = 'cover_' . $date->format('Y_m_d_H_i_s');

            $config1['file_name'] = $file_name;

            $config1['overwrite'] = false;

            $this->upload->initialize($config1);

            if (!$this->upload->do_upload('project_cover_image')) {

                $this->form_validation->set_message('project_cover_image_upload', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['project_cover_image'] = $this->upload->data();

                return true;
            }
        } else {

            $previousCoverImage = $this->input->post('project_cover_image_hidden');

            if (empty($previousCoverImage)) {

                $this->form_validation->set_message('project_cover_image_upload', "No file selected");

                return false;
            }

            return true;
        }
    }

    function project_thumbnail_upload() {

        $upload_dir = './uploads/project/thumbnail';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config4['upload_path'] = $upload_dir;

        $config4['allowed_types'] = 'gif|jpg|png|jpeg';

        $files = $_FILES;

        if (!empty($files['project_thumbnail_image']['name'][0])) {
            $count = count($_FILES['project_thumbnail_image']['name']);
            for ($i = 0; $i < $count; $i++) {
                $_FILES['project_thumbnail_image']['name'] = time() . $files['project_thumbnail_image']['name'][$i];
                $_FILES['project_thumbnail_image']['type'] = $files['project_thumbnail_image']['type'][$i];
                $_FILES['project_thumbnail_image']['tmp_name'] = $files['project_thumbnail_image']['tmp_name'][$i];
                $_FILES['project_thumbnail_image']['error'] = $files['project_thumbnail_image']['error'][$i];
                $_FILES['project_thumbnail_image']['size'] = $files['project_thumbnail_image']['size'][$i];

                $date = new DateTime();
                $file_name = 'thumbnail_' . $date->format('Y_m_d_H_i_s');
                $config4['file_name'] = $file_name;
                $config4['overwrite'] = false;

                $this->upload->initialize($config4);

                if (!$this->upload->do_upload('project_thumbnail_image')) {

                    $this->form_validation->set_message('project_thumbnail_upload', $this->upload->display_errors());

                    return false;
                } else {

                    $fileName = $this->upload->data()['file_name'];

                    $images[] = $fileName;
                }
            }
            $fileName = implode(',', $images);
            $this->upload_data['project_thumbnail_image'] = $fileName;
            return true;
        } else {
            return true;
        }
    }

    function project_brochure_upload() {

        if ($_FILES['project_brochure']['size'] != 0) {

            $upload_dir = './uploads/project/brochure';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config2['upload_path'] = $upload_dir;

            $config2['allowed_types'] = 'gif|jpg|png|jpeg|pdf';

            $date = new DateTime();

            $file_name = 'brochure_' . $date->format('Y_m_d_H_i_s');

            $config2['file_name'] = $file_name;

            $config2['overwrite'] = false;

            $this->upload->initialize($config2);

            if (!$this->upload->do_upload('project_brochure')) {

                $this->form_validation->set_message('project_brochure_upload', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['project_brochure'] = $this->upload->data();

                return true;
            }
        } else {

            return true;
        }
    }

    function project_floor_plan_upload() {

        if ($_FILES['project_floor_plan']['size'] != 0) {

            $upload_dir = './uploads/project/floor_plan';

            if (!is_dir($upload_dir)) {

                mkdir($upload_dir);
            }

            $config3['upload_path'] = $upload_dir;

            $config3['allowed_types'] = 'gif|jpg|png|jpeg|pdf';

            $date = new DateTime();

            $file_name = 'floor_plan_' . $date->format('Y_m_d_H_i_s');

            $config3['file_name'] = $file_name;

            $config3['overwrite'] = false;

            $this->upload->initialize($config3);

            if (!$this->upload->do_upload('project_floor_plan')) {

                $this->form_validation->set_message('project_floor_plan_upload', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['project_floor_plan'] = $this->upload->data();

                return true;
            }
        } else {

            return true;
        }
    }

}
