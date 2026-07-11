
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_demo_Controller extends CI_Controller {

	function __construct()
	{
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));
		$this->load->library(array('form_validation', 'email'));
		//$this->load->model('Admin/Login_Model');
		
		
    } 
    public function live_demo()
    {
	   $this->data['page_title']='Lottery | Live Demo';  
	   $this->data['subview']='live_demo/live_demo';
		// echo "<pre>";
		// print_r($this->data);die();
	  $this->load->view('user/layout/default', $this->data);
    }
}