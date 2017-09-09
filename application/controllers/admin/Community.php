<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Community
 *
 * @author DELL
 */
class Community extends AdminController {
    //put your code here

    /**
     * Responsible for auto load the model
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('Property_type_model');
        $this->load->model('Community_model');
        //$this->load->model('Community_thumbnail_model');
    }

    /**
     * Load the main view with all the current model model's data.
     * @return void
     */
    public function index($sort_by = 'community_id', $sort_order = 'asc', $offset = 0) {

        $limit = ADMIN_ITEM_PER_LIST_PAGE;

        //all the posts sent by the view
        $filter = $this->input->post('filter');
        $search_string = $this->input->post('search_string');

        $query_array = array(
            $filter => $search_string
        );

        $communities = $this->Community_model->find_with_search($limit, $offset, $query_array, $sort_by, $sort_order);

        $data['communities'] = $communities;
        $data['sort_order'] = $sort_order;
        $data['sort_by'] = $sort_by;

        //pagination settings
        $config = array();
        $config['base_url'] = site_url("admin/communities/$sort_by/$sort_order");
        $config["total_rows"] = $this->Community_model->record_count($query_array);
        $config["per_page"] = $limit;
        $config["uri_segment"] = 5;

        //initializate the panination helper 
        $this->pagination->initialize($config);


        //load the view
        $data['content'] = 'admin/communities/list';

        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Function to load add new project page
     */
    public function add() {


        $data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $data['content'] = 'admin/communities/add';
        $this->load->view('includes/admin_template', $data);
    }

    /**
     * Function to load project editing page
     */
    public function edit($id) {

        $communities = $this->Community_model->find_by_id($id);
        $data['community'] = $communities == null ? [] : $communities[0];
        $data['community_thumbnails'] = $this->Community_thumbnail_model->find_all($id);
        $data['property_types'] = $this->Property_type_model->find_all();
        //load the view
        $data['content'] = 'admin/communities/edit';
        $this->load->view('includes/admin_template', $data);
    }

    public function save() {

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            //form validation
            $this->form_validation->set_rules('community_name', 'Community name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('community_property_type', 'Community property type', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->do_upload()) {



                $data_to_store = array(
                    'community_name' => $this->input->post('community_name'),
                    'community_property_type' => $this->input->post('community_property_type'),
                    'community_description' => $this->input->post('community_description'),
                    'community_location_url' => htmlspecialchars($this->input->post('community_location_url')),
                    'community_cover_image' => (empty($this->upload_data) || !isset($this->upload_data['community_cover_image'])) ? "" : $this->upload_data['community_cover_image']['file_name'],
                    'community_navigations' => $this->getCommunityNavigations(),
                    'community_priority' => ($this->input->post('community_priority') ? $this->input->post('community_priority') : NULL)
                );

                $thumbnail = (empty($this->upload_data) || !isset($this->upload_data['community_thumbnail_image'])) ? "" : $this->upload_data['community_thumbnail_image'];

                //if the insert has returned true then we show the flash message
                if ($this->Community_model->insert($data_to_store, $thumbnail)) {
                    $status = 'success';
                    $message = 'New community created successfully';
                } else {
                    $status = 'failed';
                    $message = 'Community creation failed';
                }
            } else {
                $status = 'failed';
                $message = validation_errors();
            }

            if ($this->input->is_ajax_request()) {

                exit($this->send_response($status, $message));
            }
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
            $this->form_validation->set_rules('community_name', 'Community name', 'trim|required|xss_clean');
            $this->form_validation->set_rules('community_property_type', 'Community property type', 'trim|required|xss_clean');

            //if the form has passed through the validation
            if ($this->form_validation->run() && $this->do_upload()) {

                //project id 
                $id = $this->input->post('community_id');

                $data_to_store = array(
                    'community_name' => $this->input->post('community_name'),
                    'community_property_type' => $this->input->post('community_property_type'),
                    'community_description' => $this->input->post('community_description'),
                    'community_location_url' => htmlspecialchars($this->input->post('community_location_url')),
                    'community_cover_image' => (empty($this->upload_data) || !isset($this->upload_data['community_cover_image'])) ? $this->input->post('community_cover_image_hidden') : $this->upload_data['community_cover_image']['file_name'],
                    'community_navigations' => $this->getCommunityNavigations(),
                    'community_priority' => ($this->input->post('community_priority') ? $this->input->post('community_priority') : NULL)
                );

                $thumbnail = (empty($this->upload_data) || !isset($this->upload_data['community_thumbnail_image'])) ? "" : $this->upload_data['community_thumbnail_image'];

                //if the insert has returned true then we show the flash message
                if ($this->Community_model->update($id, $data_to_store, $thumbnail) === TRUE) {
                    $status = 'success';
                    $message = 'Community updated successfully';
                } else {
                    $status = 'failed';
                    $message = 'Community updation failed';
                }
            } else {
                $status = 'failed';
                $message = validation_errors();
            }

            if ($this->input->is_ajax_request()) {

                exit($this->send_response($status, $message));
            }
        }
    }

    public function getCommunityNavigations() {

        $navigation_list = navigation_list();

        $navigations = $this->input->post('navigations');

        $navigation_values = $this->input->post('navigation_values');

        $community_navigations = array();

        if ($navigations) {

            foreach ($navigations as $key => $value) {

                $navigation_key = array_key_exists($key, $navigation_list) ? $navigation_list[$key] : null;

                if ($navigation_key) {

                    $navigation_value = isset($navigation_values[$key]) ? $navigation_values[$key] : '';

                    $community_navigations[$navigation_key] = $navigation_value;
                }
            }
        }
        return json_encode($community_navigations);
    }

//update
    /**
     * Delete product by his id
     * @return void
     */
    public function delete() {

        //product id 
        $id = $this->uri->segment(4);

        //if the insert has returned true then we show the flash message
        if ($this->Community_model->delete($id)) {
            $status = 'success';
            $message = 'Community deleted successfully';
            redirect('admin/communities');
        } else {
            $status = 'failed';
            $message = 'Community deletion failed';
        }
    }

    /**
     * Delete project thumbnail by his id
     * @return void
     */
    public function deleteCommunityThumbnail($community_thumbnail_id) {


        if ($this->Community_thumbnail_model->delete($community_thumbnail_id)) {
            $status = 'failed';
            $message = 'Community thumbnail deletion failed';
        } else {
            $status = 'success';
            $message = 'Community thumbnail deletion success';
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

        if (!$this->community_cover_image_upload()) {

            return false;
        }

        if (!$this->community_thumbnail_upload()) {

            return false;
        }


        return true;
    }

    function community_cover_image_upload() {

        if ($_FILES['community_cover_image']['size'] != 0) {

            $upload_dir = './uploads/community/cover';

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

            if (!$this->upload->do_upload('community_cover_image')) {

                $this->form_validation->set_message('community_cover_image', $this->upload->display_errors());

                return false;
            } else {

                $this->upload_data['community_cover_image'] = $this->upload->data();

                return true;
            }
        } else {

            $previousCoverImage = $this->input->post('community_cover_image_hidden');

            if (empty($previousCoverImage)) {

                $this->form_validation->set_message('community_cover_image', "No file selected");

                return false;
            }

            return true;
        }
    }

    function community_thumbnail_upload() {

        $upload_dir = './uploads/community/thumbnail';

        if (!is_dir($upload_dir)) {

            mkdir($upload_dir);
        }

        $config4['upload_path'] = $upload_dir;

        $config4['allowed_types'] = 'gif|jpg|png|jpeg';

        $files = $_FILES;

        if (!empty($files['community_thumbnail_image']['name'][0])) {
            $count = count($_FILES['community_thumbnail_image']['name']);
            for ($i = 0; $i < $count; $i++) {
                $_FILES['community_thumbnail_image']['name'] = time() . $files['community_thumbnail_image']['name'][$i];
                $_FILES['community_thumbnail_image']['type'] = $files['community_thumbnail_image']['type'][$i];
                $_FILES['community_thumbnail_image']['tmp_name'] = $files['community_thumbnail_image']['tmp_name'][$i];
                $_FILES['community_thumbnail_image']['error'] = $files['community_thumbnail_image']['error'][$i];
                $_FILES['community_thumbnail_image']['size'] = $files['community_thumbnail_image']['size'][$i];

                $date = new DateTime();
                $file_name = 'thumbnail_' . $date->format('Y_m_d_H_i_s');
                $config4['file_name'] = $file_name;
                $config4['overwrite'] = false;

                $this->upload->initialize($config4);

                if (!$this->upload->do_upload('community_thumbnail_image')) {

                    $this->form_validation->set_message('community_thumbnail_image', $this->upload->display_errors());

                    return false;
                } else {

                    $fileName = $this->upload->data()['file_name'];

                    $images[] = $fileName;
                }
            }
            $fileName = implode(',', $images);
            $this->upload_data['community_thumbnail_image'] = $fileName;
            return true;
        } else {
            return true;
        }
    }

}
