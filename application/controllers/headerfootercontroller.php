<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Headerfootercontroller extends CI_Controller{
	public function index(){
		$this->load->view('admin/ad-headerfooter',array(
			'error'=>''
			));
	}

function insert($data=null) {
  $this->load->model('headerfootermodel');
  $this->headerfootermodel->insert($data);
  $this->load->view('admin/ad-headerfooter');
  }

}