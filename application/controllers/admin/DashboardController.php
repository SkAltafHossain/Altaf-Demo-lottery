<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {
	
	 function __construct(){

	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
// 		if(($this->session->userdata('adminDetails')==NULL)){
// 		   return redirect('/');
// 		}
	} 
	public function index()
	{		
		$this->data['page_title']='Banking | Dashboard';
		$this->db->where('status<>', 'Delete');
		$userdata=$this->db->get('tbl_user_registration')->result();  
		$this->data['userdata']=$userdata;
		
		$this->data['page_title']='Lottery | Dashboard';  
		$this->data['subview']='dashboard/dashboard';
		$this->load->view('admin/layout/default', $this->data);
	}

}
