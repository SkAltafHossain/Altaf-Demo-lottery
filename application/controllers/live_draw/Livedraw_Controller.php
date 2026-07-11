<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livedraw_Controller extends CI_Controller {

	function __construct()
	{
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));
		$this->load->library(array('form_validation', 'email'));
		// $this->load->model('home/Home_Model');
		$this->load->model('live_draw/LiveDraw_Model');

		
		
    }   
    public function index()
    {
     	$this->data['first_price'] = $this->LiveDraw_Model->get_1price_data();
     	$this->data['second_price'] = $this->LiveDraw_Model->get_2price_data();
     	$this->data['third_price'] = $this->LiveDraw_Model->get_3price_data();
     	$this->data['fourth_price'] = $this->LiveDraw_Model->get_4price_data();
     	$this->data['fifth_price'] = $this->LiveDraw_Model->get_5price_data();
     	$this->data['price'] = $this->LiveDraw_Model->get_price_data();

     	$this->data['date_time'] = $this->LiveDraw_Model->get_date_tyme();
     	
	    $this->data['page_title']='Lottery | Live Draw';  
		$this->data['subview']='live_draw';
		// echo "<pre>";
		// print_r($this->data);die();
		$this->load->view('live_draw/layout/default', $this->data);
    }
    public function altaf(){
    	
	}  

}   