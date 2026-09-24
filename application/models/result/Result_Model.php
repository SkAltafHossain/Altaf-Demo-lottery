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
	    	
	    	// Fetch prize amount from tbl_price
	    	$this->db->select('*');
	    	$this->db->from('tbl_price');
	    	$this->db->where('status','Active');
	    	$prize_data=$this->db->get()->row();
	    	
	    	// Only assign prize amounts if all_price is not null
	    	if(!empty($all_price)){
	    		if(!empty($prize_data)){
	    			$all_price->first_prize_amount = $prize_data->f_p ?? '1 Crore';
	    			$all_price->second_prize_amount = $prize_data->s_p ?? '9000';
	    			$all_price->third_prize_amount = $prize_data->t_p ?? '5000';
	    			$all_price->fourth_prize_amount = $prize_data->fo_p ?? '4500';
	    			$all_price->fifth_prize_amount = $prize_data->fi_p ?? '1000';
	    		} else {
	    			$all_price->first_prize_amount = '1 Crore';
	    			$all_price->second_prize_amount = '9000';
	    			$all_price->third_prize_amount = '5000';
	    			$all_price->fourth_prize_amount = '4500';
	    			$all_price->fifth_prize_amount = '1000';
	    		}
	    	}
	    	
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
	    	
	    	// Fetch prize amount from tbl_price
	    	$this->db->select('*');
	    	$this->db->from('tbl_price');
	    	$this->db->where('status','Active');
	    	$prize_data=$this->db->get()->row();
	    	
	    	// Only assign prize amounts if all_price is not null
	    	if(!empty($all_price)){
	    		if(!empty($prize_data)){
	    			$all_price->first_prize_amount = $prize_data->f_p ?? '1 Crore';
	    			$all_price->second_prize_amount = $prize_data->s_p ?? '9000';
	    			$all_price->third_prize_amount = $prize_data->t_p ?? '5000';
	    			$all_price->fourth_prize_amount = $prize_data->fo_p ?? '4500';
	    			$all_price->fifth_prize_amount = $prize_data->fi_p ?? '1000';
	    		} else {
	    			$all_price->first_prize_amount = '1 Crore';
	    			$all_price->second_prize_amount = '9000';
	    			$all_price->third_prize_amount = '5000';
	    			$all_price->fourth_prize_amount = '4500';
	    			$all_price->fifth_prize_amount = '1000';
	    		}
	    	}
	    	
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
	    	
	    	// Fetch prize amount from tbl_price
	    	$this->db->select('*');
	    	$this->db->from('tbl_price');
	    	$this->db->where('status','Active');
	    	$prize_data=$this->db->get()->row();
	    	
	    	// Only assign prize amounts if all_price is not null
	    	if(!empty($all_price)){
	    		if(!empty($prize_data)){
	    			$all_price->first_prize_amount = $prize_data->f_p ?? '1 Crore';
	    			$all_price->second_prize_amount = $prize_data->s_p ?? '9000';
	    			$all_price->third_prize_amount = $prize_data->t_p ?? '5000';
	    			$all_price->fourth_prize_amount = $prize_data->fo_p ?? '4500';
	    			$all_price->fifth_prize_amount = $prize_data->fi_p ?? '1000';
	    		} else {
	    			$all_price->first_prize_amount = '1 Crore';
	    			$all_price->second_prize_amount = '9000';
	    			$all_price->third_prize_amount = '5000';
	    			$all_price->fourth_prize_amount = '4500';
	    			$all_price->fifth_prize_amount = '1000';
	    		}
	    	}
	    	
	        return $all_price;  
	    }
	}
