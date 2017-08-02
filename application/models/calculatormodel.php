<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class calculatormodel extends CI_Model{
	
	function insertcalcvalue(){
	$name=$this->input->post('skeleton');
	$description=$this->input->post('turnkey');
	$data = array(
	'skeleton'=>$name,
	'turnkey'=>$description
	);
	$this->db->update('calculator',$data);
	}
}