<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchcontroller extends CI_Controller {

	/*public function index(){
    $this->load->view('our-projects',array(
			'error'=>''
			));
}*/

	/*function search(){
    $this->load->model('insertmodel');
    $data['query'] = $this->insertmodel->getsearch();
    echo '<pre>';
    print_r($data);
    echo '<pre>';

    //$this->load->view('result',$data);
    $this->load->view('header');
    $this->load->view('result', $data);
    $this->load->view('footer');
    }*/


    function search(){
    $this->load->model('insertmodel');
    $data['searchresult'] = $this->insertmodel->getsearch($this->input->post('search'));
    $this->load->view('header');
    $this->load->view('result', $data);
    $this->load->view('footer');

    }
	
}