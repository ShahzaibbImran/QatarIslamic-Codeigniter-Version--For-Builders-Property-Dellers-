<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pagesortingcontroller extends CI_Controller {

	
	public function index(){
    $this->load->view('admin/pagesorting',array(
			'error'=>''
			));
}

  function insert($data=null) {
  $this->load->model('pagesortingmodel');
  $this->pagesortingmodel->insert($data);
  $this->load->view('admin/pagesorting');
  }

  function footer($data=null) {
  $this->load->model('pagesortingmodel');
  $this->pagesortingmodel->footer($data);
  $this->load->view('admin/pagesorting');
  }
}