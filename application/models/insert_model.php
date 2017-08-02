<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class insert_model extends CI_Model{
	
	function insertservice1(){
	$name=$this->input->post('service_name1');
	$description=$this->input->post('service_description1');
	$data = array(
	'name1'=>$name,
	'description1'=>$description
	);
	$this->db->update('services', $data);
	//$this->db->insert('services', $data); 
	}

	function insertservice2(){
	$name=$this->input->post('service_name');
	$description=$this->input->post('service_description');
	$data = array(
	'name2'=>$name,
	'description2'=>$description
	);

	$this->db->update('services',$data);
	}

	function insertservice3(){
	$name=$this->input->post('service_name');
	$description=$this->input->post('service_description');
	$data = array(
	'name3'=>$name,
	'description3'=>$description
	);

	$this->db->update('services',$data);
	}

	function insertservice4(){
	$name=$this->input->post('service_name');
	$description=$this->input->post('service_description');
	$data = array(
	'name4'=>$name,
	'description4'=>$description
	);

	$this->db->update('services',$data);
	}
 	
}