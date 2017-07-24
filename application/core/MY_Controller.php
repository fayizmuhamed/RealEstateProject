<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class CommonController extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function send_response($status, $message) {

        $arr = array('response' => $status, 'comment' => $message);
        return json_encode($arr);
    }

    public function send_response_with_html_content($status, $message) {

        $form_data['status'] = $status;
        $form_data['message'] = $message;
        return json_encode($form_data, JSON_HEX_QUOT | JSON_HEX_TAG);
    }

}

class AdminController extends CommonController {

    public function __construct() {
        parent::__construct();

        // check if user is logged in
        $this->checkLoginStatus();
    }

    // redirect user to login page if not logged in
    protected function checkLoginStatus() {
        if (!$this->session->userdata('is_logged_in')) {
            redirect('admin/login');
        }
    }

}

class PublicController extends CommonController {

    public function __construct() {
        parent::__construct();
    }

}
