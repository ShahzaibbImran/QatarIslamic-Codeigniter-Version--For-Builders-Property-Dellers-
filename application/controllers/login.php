<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

  public function __construct(){
        parent::__construct();   
    }   

  public function index(){
    $this->load->view('admin/sign-in',array(
      'error'=>''
      ));
    $this->load->view('admin/footer-admin');
    }
    public function login(){
    if ($this->input->post('username') == 'admin@qatar.com' && $this->input->post('password') == 'admin_123') {
      $this->load->view('admin/admin');
    }else{
      print "<script type=\"text/javascript\">alert('Your Given Credentials Is not Working.Try Agian With Correct Credentials');</script>";
      $this->load->view('admin/sign-in');
    }
    
  }
}
