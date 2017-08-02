<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class calculatorcontroller extends CI_Controller {

	
	public function index()
	{
    $this->load->view('admin/ad-calculate',array(
			'error'=>''
			));
}

	public function insert($data=null){
	  $this->load->model('calculatormodel');
	  $this->calculatormodel->insertcalcvalue($data);
	  $this->load->view('admin/ad-calculate');
	}
}