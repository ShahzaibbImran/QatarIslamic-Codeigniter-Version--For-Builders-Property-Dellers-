<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Email extends CI_Controller {

public function index()
  {
    $this->load->view('contact-us',array(
      'error'=>''
      ));
  }

  public function send(){
  $this->load->library('email');
  $this->email->from('contactus@qatarislamic.com','Qatar Islamic');
  $this->email->to('contactus@qatarislamic.com','Qatar Islamic');
  $this->email->cc('Shahzaib.imran.aimviz@gmail.com','From Qatar Islamic');
  $message = 'Name : '.$this->input->post('name');
  $message .= '<br>Email : '.$this->input->post('email');
  $message .= '<br>Phone : '.$this->input->post('phone');
  $message .= '<br>Subject : '.$this->input->post('subject');
  $message .= '<br>Message : '.$this->input->post('message');
  $this->email->message($message);
  $email_send =$this->email->send();
  if($email_send){
    print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
    $this->load->view('header');
    $this->load->view('contact-us');
    $this->load->view('footer');
  }
  else{
    print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";
    $this->load->view('header');
    $this->load->view('contact-us');
    $this->load->view('footer');
  }
}

public function sendEmail(){
    if($this->input->post('send_email') == 'send_email'){
  $this->load->library('email');
  $config['upload_path'] = 'assets/uploads/email/';
  $config['allowed_types'] = '*';
  //$config['max_size'] = '100000';
  $this->load->library('upload', $config);
  $this->upload->do_upload('resume-upload');
   if ( ! $this->upload->do_upload('resume-upload')){
            $this->load->view('home/calculate_view');
            print "<script type=\"text/javascript\">alert('Your File Has Not Been Uploaded');</script>";
      }else{
           $upload_data = $this->upload->data();
           print "<script type=\"text/javascript\">alert('Your File Has Been Uploaded');</script>";
         }
  $this->email->attach($upload_data['full_path']);
  $this->email->set_newline("\r\n");
  $this->email->set_crlf("\r\n");
  $this->email->from('contactus@qatarislamic.com','Qatar Islamic Project Cost');
  $this->email->to('contactus@qatarislamic.com','Qatar Islamic Project Cost');
  $this->email->cc('Shahzaib.imran.aimviz@gmail.com','From Qatar Islamic Project Cost');
  $message = 'Name : '.$this->input->post('name');
  $message .= '<br>Email : '.$this->input->post('email');
  $message .= '<br>Phone : '.$this->input->post('phone');
  $message .= '<br>Message : '.$this->input->post('message');
  $message .= '<br>Attach File : '.$this->input->post('resume-upload');
  $this->email->message($message);
  $email_send =$this->email->send();
    if($email_send){
  print "<script type=\"text/javascript\">alert('Your information has been submitted successfully');</script>";
  $this->load->view('header');
  $this->load->view('calculate-cost');
  $this->load->view('footer');
  }
    else{
  print "<script type=\"text/javascript\">alert('Your information has Not been submitted successfully.Try Again');</script>";    
  $this->load->view('header');
  $this->load->view('calculate-cost');
  $this->load->view('footer');
  }
 }

}
}
