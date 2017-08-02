<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class pagesortingmodel extends CI_Model{
	
	function insert(){
	$name=$this->input->post('name');
	$link=$this->input->post('link');
	$order=$this->input->post('order');
	$data = array(
	'name'=>$name,
	'link'=>$link,
	'order'=>$order,
	);
	//$this->db->insert('linksorting', $data);
	$this->db->where('order', $order);
	$this->db->update('linksorting', $data);
	}

	function footer(){
	$name=$this->input->post('name');
	$link=$this->input->post('link');
	$order=$this->input->post('order');
	$data = array(
	'name'=>$name,
	'link'=>$link,
	'order'=>$order,
	);
	//$this->db->insert('linksortingfooter', $data);
	$this->db->where('order', $order);
	$this->db->update('linksortingfooter', $data);
	}
	
}