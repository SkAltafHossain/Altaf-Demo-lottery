<?php   
defined('BASEPATH') OR exit('No direct script access allowed');     

class Result_Controller extends CI_Controller{    
      
	function __construct()   
	{    
	  	parent::__construct(); 		
		$this->load->helper(array('common_helper', 'string', 'form', 'security'));  
		$this->load->library(array('form_validation', 'email'));
		$this->load->model('result/Result_Model');
		$this->load->model('home/Home_Model');
    } 
    public function old_result()   
    {
    	$this->data['time'] = $this->Home_Model->get_time();
	   $this->data['page_title']='Lottery | Old Result';  
	   $this->data['subview']='old_result/old_result';
		// echo "<pre>";
		// print_r($this->data);die();
		$this->load->view('user/layout/default', $this->data);   
    }
    public function result($time)
    {   
            $result_pdf=$this->Result_Model->result_details($time);
			$data['result_pdf']=$result_pdf;
		    
		    // Check if result data exists
		    if (empty($result_pdf)) {
		        // Return a PDF with "No Result Available" message
		        $mpdf = new \Mpdf\Mpdf();
		        $html = '<div style="text-align:center; padding:50px; font-family:Arial;">
		                    <h2>No Result Available</h2>
		                    <p>Result for this time slot is not available yet.</p>
		                    <p>Please check back later.</p>
		                </div>';
		        $mpdf->WriteHTML($html);
		        $mpdf->Output();
		        return;
		    }
		    
			$mpdf = new \Mpdf\Mpdf();
			$html = $this->load->view('user/result_pdf/result_pdf',$data,true);
			$mpdf->WriteHTML($html);  
			$mpdf->Output();
			$mpdf->Output('Haryana.pdf'); // opens in browser
            //$mpdf->Output('arjun.pdf','D'); // it downloads the file into the user system, with give name
		
	}
	public function oldday_result_date11()
	{
	    $time=$this->input->post('time');
	    $t=1;
	    $pvf_date=$this->input->post('pdate');	    
	    $result_pdf=$this->Result_Model->old_result_details($t,$pvf_date);
	    $data['result_pdf']=$result_pdf;
	 //    echo"<pre>";
		// print_r($data);die();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('user/result_pdf/result_pdf',$data,true);
		$mpdf->WriteHTML($html);  
		//$mpdf->Output();
		$mpdf->Output('Haryana.pdf','D');
    }
    public function oldday_result_date3()
	{
		$t=2;
	    $time=$this->input->post('time');
	    $pvf_date=$this->input->post('pdate');	    
	    $result_pdf=$this->Result_Model->old_result_details($t,$pvf_date);
	    $data['result_pdf']=$result_pdf;
	 //    echo"<pre>";
		// print_r($data);die();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('user/result_pdf/result_pdf',$data,true);
		$mpdf->WriteHTML($html);  
		//$mpdf->Output();
		$mpdf->Output('Haryana.pdf','D');
    }
    public function oldday_result_date7()
	{
		$t=3;
	    $time=$this->input->post('time');
	    $pvf_date=$this->input->post('pdate');	    
	    $result_pdf=$this->Result_Model->old_result_details($t,$pvf_date);
	    $data['result_pdf']=$result_pdf;
	    // echo"<pre>";
		// print_r($data);die();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('user/result_pdf/result_pdf',$data,true);
		$mpdf->WriteHTML($html);  
		//$mpdf->Output();
		$mpdf->Output('Haryana.pdf','D');
    }

	public function oldday_result_date8()
	{
		$t=4;
	    $time=$this->input->post('time');
	    $pvf_date=$this->input->post('pdate');	    
	    $result_pdf=$this->Result_Model->old_result_details($t,$pvf_date);
	    $data['result_pdf']=$result_pdf;
	    // echo"<pre>";
		// print_r($data);die();
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('user/result_pdf/result_pdf',$data,true);
		$mpdf->WriteHTML($html);  
		//$mpdf->Output();
		$mpdf->Output('Haryana.pdf','D');
    }
}