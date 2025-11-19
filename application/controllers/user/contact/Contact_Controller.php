

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_Controller extends CI_Controller {

	function __construct()
	{
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));
		$this->load->library(array('form_validation', 'email'));
		//$this->load->model('Admin/Login_Model');
		
		
    } 
    public function claiem()
    {
	   $this->data['page_title']='Lottery | Claiem';  
	   $this->data['subview']='claiem/claiem';
		// echo "<pre>";
		// print_r($this->data);die();
	  $this->load->view('user/layout/default', $this->data);
    }
    public function contact()
    {
	   $this->data['page_title']='Lottery | Live Demo';  
	   $this->data['subview']='contact/contact';
		// echo "<pre>";
		// print_r($this->data);die();
	  $this->load->view('user/layout/default', $this->data);
    }
}