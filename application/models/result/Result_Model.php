<?php
	
	class Result_Model extends CI_model  
	{
		 public function gettime_data($time)
	    {
	    	$this->db->select('*');
	    	$this->db->from('tbl_time');
	    	$this->db->where('tbl_time.status','Active');
	        $time=$this->db->get()->row();
	        return $time;

	    }
	    public function result_details($time)
	    {
	    	//echo $time;die();
	    	$date=date('Y-m-d');
	    	$this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as date_1,tbl_price_manegment.*,tbl_time.time as time_t ');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.status','Active');
	    	$this->db->where('tbl_price_manegment.date',$date);
	    	$this->db->where('tbl_price_manegment.time',$time);
	 		$this->db->order_by('tbl_price_manegment.id','desc');

	    	$all_price=$this->db->get()->row();
	   // 	echo $this->db->last_query($all_price);
	   // 	echo "<pre>";
	   // 	print_r($all_price);die();
	        return $all_price;  
	    }
	   
		public function result_details_add($time)
	    {
	    	//echo $time;die();
	    	$date=date('Y-m-d');
	    	$this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as date_1,tbl_price_manegment.*,tbl_time.time as time_t ');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.date',$date);
	    	$this->db->where('tbl_price_manegment.time',$time);
	 		$this->db->order_by('tbl_price_manegment.id','desc');

	    	$all_price=$this->db->get()->row();
	   // 	echo $this->db->last_query($all_price);
	   // 	echo "<pre>";
	   // 	print_r($all_price);die();
	        return $all_price;  
	    }

	    public function old_result_details($time,$date)
	    {
	        
	    	//$date=date('Y-m-d');
	    	// $this->db->select('tbl_price_manegment.*,tbl_time.time as time_t ');
	    	$this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as date_1,tbl_price_manegment.*,tbl_time.time as time_t ');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.status','Active');
	    	$this->db->where('tbl_price_manegment.date',$date);
	    	$this->db->where('tbl_price_manegment.time',$time);
	    	$all_price=$this->db->get()->row();
	    	// echo "<pre>";
	    	// print_r($all_price);die();
	        return $all_price;  
	    }
	}
