<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class CommonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}

class AdminController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        
         // check if user is logged in
        $this->checkLoginStatus();
    }
    
    // redirect user to login page if not logged in
    protected function checkLoginStatus() {
        if (! $this->session->userdata('is_logged_in')) {
            redirect('admin/login');
        }
    } 
}

class PublicController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
    }
}
