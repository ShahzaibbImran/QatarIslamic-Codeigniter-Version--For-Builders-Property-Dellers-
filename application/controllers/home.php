<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function about_view(){
		$this->load->view('header');
		$this->load->view('about-us');
		$this->load->view('footer');
	}

	public function calculate_view(){
		$this->load->view('header');
		$this->load->view('calculate-cost');
		$this->load->view('footer');
	}


	public function contact_view(){
		$this->load->view('header');
		$this->load->view('contact-us');
		$this->load->view('footer');
	}


	public function work_view(){
		$this->load->view('header');
		$this->load->view('how-we-work');
		$this->load->view('footer');
	}

	public function project_view(){
		$this->load->view('header');
		$this->load->view('our-projects');
		$this->load->view('footer');
	}


	public function servicessub_view(){
		$this->load->view('header');
		$this->load->view('our-services-sub');
		$this->load->view('footer');
	}

	public function servicesmen_view(){
		$this->load->view('header');
		$this->load->view('our-services');
		$this->load->view('footer');
	}

	public function result_view(){
		$this->load->view('header');
		$this->load->view('result');
		$this->load->view('footer');
	}

	

}
