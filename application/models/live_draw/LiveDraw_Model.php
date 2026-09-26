<?php
	
	class LiveDraw_Model extends CI_model  
	{

		public function get_1price_data()
		{
			$this->db->select('tbl_price_manegment.first_price, tbl_price_manegment.title');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$this->db->order_by("id", "desc");
	    	$first_price=$this->db->get()->row();
	        return $first_price;
		}
		public function get_2price_data()
		{
			$this->db->select('tbl_price_manegment.sce_price');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$this->db->order_by("id", "desc");
	    	$second_price=$this->db->get()->row();
	        return $second_price;
		}

		public function get_3price_data()
		{
			$this->db->select('tbl_price_manegment.third_price');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$this->db->order_by("id", "desc");
	    	$third_price=$this->db->get()->row();
	        return $third_price;
		}

		public function get_4price_data()
		{
			$this->db->select('tbl_price_manegment.for_price');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$this->db->order_by("id", "desc");
	    	$third_price=$this->db->get()->row();
	        return $third_price;
		}

		public function get_5price_data()
		{
			$this->db->select('tbl_price_manegment.five_price');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$this->db->order_by("id", "desc");
	    	$third_price=$this->db->get()->row();
	        return $third_price;
		}

		public function get_price_data(){

			$this->db->select();
	    	$this->db->from('tbl_price');
	    	$this->db->where('status','Active');
	    	$third_price=$this->db->get()->row();
	        return $third_price;

		}

		public function get_date_tyme(){

			$this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as date_1,tbl_time.time as time_t ');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.status','Inactive');
	    	$third_price=$this->db->get()->row();
	        return $third_price;

		}

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
	    	$date=date('Y-m-d');
	    	$this->db->select('tbl_price_manegment.*,tbl_time.time as time_t ');
	    	$this->db->from('tbl_price_manegment');
	    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
	    	$this->db->where('tbl_price_manegment.status','Active');
	    	$this->db->where('tbl_price_manegment.date',$date);
	    	$this->db->where('tbl_price_manegment.time',$time);
	    	$all_price=$this->db->get()->row();
	    	// echo $this->db->last_query($all_price);die();
	    	// echo "<pre>";
	    	print_r($all_price);
	        return $all_price;  
	    }
	   
	    public function old_result_details($time,$date)
	    {
	    	//$date=date('Y-m-d');
	    	$this->db->select('tbl_price_manegment.*,tbl_time.time as time_t ');
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
