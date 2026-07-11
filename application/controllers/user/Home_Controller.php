<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	function __construct()
	{
	    
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));
		$this->load->library(array('form_validation', 'email'));
		$this->load->model('home/Home_Model');
		
		
    }   
    public function home()
    {
    	$this->data['time1'] = $this->Home_Model->get_time1();
    	$this->data['time2'] = $this->Home_Model->get_time2();
    	$this->data['time3'] = $this->Home_Model->get_time3();
		$this->data['time4'] = $this->Home_Model->get_time4();
    	$this->data['inactiveDate'] = $this->Home_Model->getInactiveData();
    	$this->data['dateOfOneMonth'] = $this->Home_Model->getDataOneMonth();
    	$this->updateInactiveData($this->data['inactiveDate']);
	    $this->data['page_title']='Lottery | Home';  
		$this->data['subview']='home/home';
// 		echo "<pre>";
// 		print_r($this->data);die();
		$this->load->view('user/layout/default', $this->data);
    }

    public function updateInactiveData($data){
        // pr($data);
        // die;
        
		if($data!=null){
	    	$endTime = strtotime("+20 minutes", strtotime($data->time_t));
			$updatetime=date('H:i:s', $endTime); 
			
			$currentTime= date('H:i:s');
			$currentDate= date('d/m/Y');
			
			if($currentTime>=$updatetime && $currentDate==$data->date_1){
				$this->db->set('status','Active');
				$this->db->where('id',$data->id);
				$this->db->update('tbl_price_manegment');
			}
		}
    }

    public function privacy_policy()
    {
        $this->data['page_title'] = 'Privacy Policy | Altaf Lottery';
        $this->data['subview'] = 'privacy_policy';
        $this->load->view('user/layout/default', $this->data);
    }

    public function last_digit()
    {
        // Load the API model to get data
        $this->load->model('api/Api_Model');
        
        // Get first price last digit data
        $results = $this->Api_Model->get_all_first_price_last();
        
        $this->data['page_title'] = 'First Prize Last Digit | Altaf Lottery';
        $this->data['subview'] = 'home/first_prize_last_digit';
        $this->data['results'] = $results;
        $this->load->view('user/layout/default', $this->data);
    }

    public function last_two_digit()
    {
        // Load the API model to get data
        $this->load->model('api/Api_Model');
        
        // Get first price jodi data (for two digits)
        $results = $this->Api_Model->get_all_first_price_jodi();
        
        $this->data['page_title'] = 'First Prize Last Two Digits | Altaf Lottery';
        $this->data['subview'] = 'home/first_prize_last_two_digit';
        $this->data['results'] = $results;
        $this->load->view('user/layout/default', $this->data);
    }
}