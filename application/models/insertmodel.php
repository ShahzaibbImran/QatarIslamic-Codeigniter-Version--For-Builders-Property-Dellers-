<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class insertmodel extends CI_Model{

  function __construct(){
     parent::__construct();
  }

        //Insert Data In Database(Start Here)
        public function inserting1($data){
            $this->db->insert('gallery',$data);
        }

        public function inserting2($data){
            $this->db->insert('gallery',$data);
        }

        public function inserting3($data){
            $this->db->insert('gallery',$data);
        }
        //Insert Data In Database(End Here)

        //Deleting Data From Database(Start Here)
        public function deleting1($id){
            $this->db->delete('gallery',$id);
        }

        public function deleting2($id){
           $this->db->delete('gallery',$id);
        }

        public function deleting3($id){
            $this->db->delete('gallery',$id);
        }
        //Deleting Data From Database(End Here)
        
        //Show All Projects From Database
        function show_projects(){
            $query = $this->db->get('gallery');
            $query_result = $query->result();
            return $query_result;
        }
        
        // Show Only Selected Project From Database
        function show_data_id($data){
            $this->db->select('*');
            $this->db->from('gallery');
            $this->db->where('id', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
            
        //Update Selected Project in Database
        function update_student_id1($id,$data){
            $this->db->where('id', $id);
            $this->db->update('gallery', $data);
        }

        //Search Data from Database for search box
        function getsearch($search) {
            if(empty($search))
            return array();
            $result = $this->db->like('name', $search)
            ->or_like('description', $search)
            ->or_like('location', $search)
            ->get('gallery');
            return $result->result();
        } 
}
