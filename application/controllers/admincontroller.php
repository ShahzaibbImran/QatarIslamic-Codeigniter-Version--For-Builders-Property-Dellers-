<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admincontroller extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('insertmodel');
    }
  
    function index(){
        $this->load->view('admin/admin',array(
        'error'=>''));
    }

    function active(){
        $this->load->view('admin/ad-active',array(
        'error'=>''));
    }

    function future(){
        $this->load->view('admin/ad-future',array(
        'error'=>''));
    }

    function projectupdate(){
        $this->load->view('admin/recent_update',array(
        'error'=>''));
    }

    //Insert Data In Database(Start Here)
    function insertDB1(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile('myfile','assets/uploads/projects');
        $data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location, 'project_cat' => 1);
        $this->insertmodel->inserting1($data);
        $this->load->view('admin/admin');
    }

    function insertDB2(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile('myfile2','assets/uploads/projects');
        $data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location, 'project_cat' => 2);
        $this->insertmodel->inserting2($data);
        $this->load->view('admin/ad-active');
    }

    function insertDB3(){
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile('myfile3','assets/uploads/projects');
        $data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location, 'project_cat' => 3);
        $this->insertmodel->inserting3($data);
        $this->load->view('admin/ad-future');
    }
    //Insert Data In Database(End Here)

    //Deleting Data From Database(Start Here)
    function deleteDB1($id){
        $this->load->model('insertmodel');
        $this->insertmodel->deleting1($id);
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        print "<script type=\"text/javascript\">alert('successfully Deleted');</script>";
        $this->load->view('admin/admin');
    }

   function deleteDB2($id){
        $this->load->model('insertmodel');
        $this->insertmodel->deleting2($id);
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        print "<script type=\"text/javascript\">alert('successfully Deleted');</script>";
        $this->load->view('admin/ad-active');
    }
    
   function deleteDB3($id){
        $this->load->model('insertmodel');
        $this->insertmodel->deleting3($id);
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        print "<script type=\"text/javascript\">alert('successfully Deleted');</script>";
        $this->load->view('admin/ad-future');
    }  
    //Deleting Data From Database(Start Here)

    // Show Only Selected Project From Database
    function show_data_id(){
        $id = $this->uri->segment(3);
        $data['project'] = $this->insertmodel->show_projects();
        $data['single_project'] = $this->insertmodel->show_data_id($id);
        $this->load->view('admin/recent_update', $data);
    }

    //Update Selected Project in Database
    function update_data_id(){
        $id= $this->input->post('id');
        $this->load->model('insertmodel');
        $name = $this->input->post('image_name');
        $location = $this->input->post('image_location');
        $description = $this->input->post('image_description');
        $imgurl = $this->uploadfile('myfile','assets/uploads/projects');
        $data = array('imageurl'=>$imgurl,'name' => $name, 'description' => $description,'location' => $location,);
        $this->insertmodel->update_student_id1($id,$data);
        print "<script type=\"text/javascript\">alert('Project Has Been Successfully Updated.');</script>";
        $this->show_data_id();
    }

    //upload File In Database And Storing Folder Both For Category 1
    public function uploadfile($filename,$folder){
          $config['upload_path'] = 'assets/uploads/projects/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_width'] = "1024";
          $config['max_height'] = "768";
          $this->load->library('upload', $config);
          //Condition Run When Image Is not uploaded
          if(!$this->upload->do_upload($filename)){
              print "<script type=\"text/javascript\">alert('Your Image Has Not Been Successfully Uploaded.Try Again');</script>"; 
              $this->load->view('admin/admin');
            }
            //Condition Run When Image Is uploaded
            else{
                print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";        
                $data = $this->upload->data();
                $ext = explode('.',$data['full_path']);
                $fileName = time().'.'.$ext[1];
                rename($data['full_path'],$data['file_path'].$fileName);
                return base_url().$folder.'/'. $fileName ;
             }
    }

    //upload File In Database And Storing Folder Both For Category 2   
    public function uploadfile2($filename,$folder){
           $config['upload_path'] = 'assets/uploads/projects/';
           $config['allowed_types'] = 'gif|jpg|png';
           $config['max_width'] = "1024";
           $config['max_height'] = "768";
           $this->load->library('upload', $config);
           $this->upload->initialize($config);
          //Condition Run When Image Is Not uploaded
          if(!$this->upload->do_upload($filename)){
              print "<script type=\"text/javascript\">alert('Your Image Has Not Been Successfully Uploaded.Try Again');</script>"; 
              $this->load->view('admin/ad-active');
            }
            //Condition Run When Image Is uploaded
            else{
               print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";       
               $data = $this->upload->data();
               $ext = explode('.',$data['full_path']);
               $fileName = time().'.'.$ext[1];
               rename($data['full_path'],$data['file_path'].$fileName);
               return base_url().$folder.'/'. $fileName ;
            }
    }

    //upload File In Database And Storing Folder Both For Category 3
    public function uploadfile3($filename,$folder){
           $config['upload_path'] = 'assets/uploads/projects/';
           $config['allowed_types'] = 'gif|jpg|png';
           $config['max_width'] = "1024";
           $config['max_height'] = "768";
           $this->load->library('upload', $config);
           //Condition Run When Image Is Not uploaded
           if(!$this->upload->do_upload($filename)){
            print "<script type=\"text/javascript\">alert('Your Image Has Not Been Successfully Uploaded.Try Again');</script>"; 
            $this->load->view('admin/ad-future');
          }
          //Condition Run When Image Is uploaded
          else{
             print "<script type=\"text/javascript\">alert('Your Image Has Been Successfully Uploaded');</script>";        
             $data = $this->upload->data();
             $ext = explode('.',$data['full_path']);
             $fileName = time().'.'.$ext[1];
             rename($data['full_path'],$data['file_path'].$fileName);
             return base_url().$folder.'/'. $fileName ;
          }
    }

}