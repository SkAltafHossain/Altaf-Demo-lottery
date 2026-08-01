<?php

	class Add_price_Controller extends CI_controller   
	{
		
		function __construct()   
		{
		  	parent::__construct(); 		
			$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
			$this->load->model('result/Result_Model'); // Load Result_Model in the constructor
			if(($this->session->userdata('adminDetails')==NULL))
			{
			   return redirect('admin');
			}
        } 
		public function view_price()  
		{	
			$this->db->select('tbl_price_manegment.*,tbl_time.time as time_t');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.status<>','Delete');
			$this->db->order_by('id', 'desc');
			$price_data=$this->db->get()->result();

			$this->data['price_data']=$price_data;
			$this->data['page_title']='Lottery | Add Price';  
			$this->data['subview']='add_price/list_price';
			//pr($this->data);die();
			$this->load->view('admin/layout/default', $this->data);
		}
		public function add_price()
		{

			$this->db->where('status', 'Active');
		    $time_data=$this->db->get('tbl_time')->result();	
		    $this->data['time_data']=$time_data;
			$this->data['page_title']='Lottery | Add Price';  
			$this->data['subview']='add_price/add_price';
			$this->load->view('admin/layout/default', $this->data);
		}
		public function save_price()     
		{
			if($_POST)
			{
				$title=$this->input->post('title');
				$drow_number=$this->input->post('drow_number');
				$st_price=$this->input->post('first_price');
				$nd_price=$this->input->post('sce_price');
				$rd_price=$this->input->post('third_price');
				$for_price=$this->input->post('for_price');
				$th_price=$this->input->post('five_price');   
				$time=$this->input->post('time');
				$uniqcode = "pr".random_string('alnum',28);
				$data=array(
				'uniqcode' =>$uniqcode,
				'title' => $title,
				'drow_number' => $drow_number,   
				'first_price' => $st_price,
				'sce_price' => $nd_price,
				'third_price' => $rd_price,
				'for_price' => $for_price,
				'five_price' => $th_price,
				'time'=>$time,
				'date' => date('Y-m-d')
				);	
				// echo"<pre>";
				// print_r($data);die();			
				$this->db->insert('tbl_price_manegment', $data);
				
				// Generate and save result PDF for this price/time and store path in pdf_file
				$this->load->model('result/Result_Model');
				$result_pdf = $this->Result_Model->result_details_add($time);
				if(!empty($result_pdf)){
					$pdf_data['result_pdf'] = $result_pdf;
					$mpdf = new \Mpdf\Mpdf();
					$html = $this->load->view('user/result_pdf/result_pdf',$pdf_data,true);
					$mpdf->WriteHTML($html);
					
					$filename = date('Ymd').'_time'.$time.'.pdf';
					$filepath = FCPATH.'uploads/price_pdfs/'.$filename;
					$mpdf->Output($filepath,'F');
					
					$this->db->where('uniqcode', $uniqcode);
					$this->db->update('tbl_price_manegment', array('pdf_file' => 'uploads/price_pdfs/'.$filename));
				}
				$this->session->set_flashdata('success', 'Price added successfully.');
				redirect('admin/view_price');
				
			}
		}
		public function edit_price($uniqcode)
		{
// 			$this->db->where('status', 'Inactive');
			$this->db->where('uniqcode', $uniqcode);
			$price_data=$this->db->get('tbl_price_manegment')->row();
			
			$this->db->where('status', 'Active');
		    $time_data=$this->db->get('tbl_time')->result();	
		    $this->data['time_data']=$time_data;
		    
			$this->data['price_data']=$price_data;
			
			$this->data['page_title']='Lottery | Edit Price';  
			$this->data['subview']='add_price/edit_price';
			// echo "<pre>";
			// print_r($this->data);
			$this->load->view('admin/layout/default', $this->data);
		}
		public function update_price()
		{
			$uniqcode=$this->input->post('uniqcode');
			if($_POST)
			{
				$title=$this->input->post('title');
				$drow_number=$this->input->post('drow_number');
				$st_price=$this->input->post('first_price');
				$nd_price=$this->input->post('sce_price');
				$rd_price=$this->input->post('third_price');
				$for_price=$this->input->post('for_price');
				$th_price=$this->input->post('five_price');
				$time=$this->input->post('time');
				
				// Get existing date to preserve it
				$this->db->where('uniqcode', $uniqcode);
				$existing_data = $this->db->get('tbl_price_manegment')->row();
				$existing_date = $existing_data->date;
				
				$data=array(
				'title' => $title,
				'drow_number' => $drow_number,   
				'first_price' => $st_price,
				'sce_price' => $nd_price,
				'third_price' => $rd_price,
				'for_price' => $for_price,
				'five_price' => $th_price,
				'time'=>$time,
				'date' => $existing_date
				);	
				// echo"<pre>";
				// print_r($data);die();			
				$this->db->where('uniqcode', $uniqcode);
				$update=$this->db->update('tbl_price_manegment', $data);
				
				// Regenerate and save result PDF for this updated price/time and store path in pdf_file
				$this->load->model('result/Result_Model');
				$result_pdf = $this->Result_Model->result_details_add($time);
				if(!empty($result_pdf)){
					$pdf_data['result_pdf'] = $result_pdf;
					$mpdf = new \Mpdf\Mpdf();
					$html = $this->load->view('user/result_pdf/result_pdf',$pdf_data,true);
					$mpdf->WriteHTML($html);
					
					$filename = date('Ymd').'_time'.$time.'.pdf';
					$filepath = FCPATH.'uploads/price_pdfs/'.$filename;
					$mpdf->Output($filepath,'F');
					
					$this->db->where('uniqcode', $uniqcode);
					$this->db->update('tbl_price_manegment', array('pdf_file' => 'uploads/price_pdfs/'.$filename));
				}
				$this->session->set_flashdata('success', 'Price update successfully.');
				redirect('admin/view_price');
				
			}
		}
	public function status()
	{
		$uniqcode=$this->input->post('transid');
		$this->db->where('status <>', 'Delete');
		$this->db->where('uniqcode', $uniqcode);
		$get_data=$this->db->get('tbl_price_manegment')->row();


		if($get_data->status=='Active')
		{
			$data=array(
			'status'=>'Inactive',
			'date'=>date('Y-m-d'),
			);
		}
		elseif($get_data->status=='Inactive')
		{
			$data=array(
			'status'=>'Active',
			'date'=>date('Y-m-d'),
			);
		}
		$this->db->where('uniqcode', $uniqcode);
		$this->db->update('tbl_price_manegment', $data);
	}
///////////***** admin category delete*****/////////////
	public function destroy($uniqcode)
	{
		//echo "string";die();
// 		$data=array(
// 		'status'=>'Delete',
// 		'date'=>date('Y-m-d'),
// 		);
	
		$this->db->where('uniqcode', $uniqcode);
		$this->db->delete('tbl_price_manegment');
		$this->session->set_flashdata('success', 'Price deleted successfully');
		redirect('admin/view_price');
	}

}
?>