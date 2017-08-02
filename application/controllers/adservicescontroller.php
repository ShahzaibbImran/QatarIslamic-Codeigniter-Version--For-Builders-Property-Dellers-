<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adservicescontroller extends CI_Controller {

	
	public function index(){
    $this->load->view('admin/ad-services',array(
			'error'=>''
			));
    }

  public function service2(){
    $this->load->view('admin/ad-services2',array(
      'error'=>''
      ));
    }

public function service3(){
    $this->load->view('admin/ad-services3',array(
      'error'=>''
      ));
    }

  public function service4(){
    $this->load->view('admin/ad-services4',array(
      'error'=>''
      ));
    }


  function insert1($data=null) {
  $this->load->model('insert_model');
  $this->insert_model->insertservice1($data);
  print "<script type=\"text/javascript\">alert('Service has been uploaded successfully');</script>";
  $this->load->view('admin/ad-services');
  }

  function insert2($data=null) {
  $this->load->model('insert_model');
  $this->insert_model->insertservice2($data);
  print "<script type=\"text/javascript\">alert('Service has been uploaded successfully');</script>";
  $this->load->view('admin/ad-services2');
  }

  function insert3($data=null) {
  $this->load->model('insert_model');
  $this->insert_model->insertservice3($data);
  print "<script type=\"text/javascript\">alert('Service has been uploaded successfully');</script>";
  $this->load->view('admin/ad-services3');
  }

  function insert4($data=null) {
  $this->load->model('insert_model');
  $this->insert_model->insertservice4($data);
  print "<script type=\"text/javascript\">alert('Service has been uploaded successfully');</script>";
  $this->load->view('admin/ad-services4');
  }

  public function addadmin()
  {
    /*$this->load->view('header');*/
    
    $this->load->view('admin/admin',array(
      'error'=>''
      ));


  }

	public function addcalculate()
  {
    /*$this->load->view('header');*/
    
    $this->load->view('admin/ad-calculate',array(
      'error'=>''
      ));


  }


	
}