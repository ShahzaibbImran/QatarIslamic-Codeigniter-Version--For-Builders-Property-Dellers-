<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class headerfootermodel extends CI_Model{
	
	function insert(){
	$fb=$this->input->post('fb');
	$twitter=$this->input->post('twitter');
	$instagram=$this->input->post('instagram');
	$email=$this->input->post('email');
	$number=$this->input->post('number');
	$data = array(
	'fb'=>$fb,
	'twitter'=>$twitter,
	'insta'=>$instagram,
	'email'=>$email,
	'number'=>$number
	);
	$this->db->update('header',$data);
	}
}