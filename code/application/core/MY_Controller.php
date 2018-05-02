<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    // Bien luu thong tin gui den view
   //var $data = array();
   function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');     
   }
   private function check_login()
    {
        // $this->load->library("session");
        //lay ra gia tri cua controller
        $controller = $this->uri->segment(2);
        $controller = strtolower($controller);
        $login = $this->session->userdata('login');		
    
        
        if(!$login && $controller!= 'login')
        {
            redirect('user/login');
        }
        if($login && $controller == 'login')
        {
            $this->load->view('logout');
        }
    }
}