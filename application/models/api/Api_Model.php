<?php
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Api_Model extends CI_Model  
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function date_search_getRows($time,$date)
        {
        	$this->db->select('tbl_price_manegment.first_price');
			$this->db->from('tbl_price_manegment');
			$this->db->join('tbl_time', 'tbl_time.id=tbl_price_manegment.time', 'inner');
			$this->db->where('tbl_price_manegment.status','Active');
			$this->db->where('tbl_price_manegment.date',$date);
			$this->db->where('tbl_time.time',$time);
			$query = $this->db->get()->row();
			if($query!=''){
				return $query->first_price;
			}
			else{
				return 0;
			}
			
        }


        public function date_only($date)
        {
        	$this->db->select('tbl_price_manegment.date');
			$this->db->from('tbl_price_manegment');
			$this->db->join('tbl_time', 'tbl_time.id=tbl_price_manegment.time', 'inner');
			$this->db->where('tbl_price_manegment.status','Active');
			$this->db->group_by('tbl_price_manegment.date'); 
			$this->db->order_by('tbl_price_manegment.date', 'desc');
			$query = $this->db->get()->result();
			return $query;
        }

        public function carrent_data()
        {
        	$date=date("Y-m-d");
         	$this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d-%m-%y") as date, tbl_time.time');
         	//$this->db->select('tbl_price_manegment.date,tbl_time.time');
			$this->db->from('tbl_price_manegment');
			$this->db->join('tbl_time', 'tbl_time.id=tbl_price_manegment.time', 'inner');
			$this->db->where('tbl_price_manegment.status','Active');
// 			if($date!='')
// 			{
// 				$this->db->where('tbl_price_manegment.date',$date);

// 			}
			// $this->db->group_by('tbl_price_manegment.date');
			$this->db->limit(1);
			$this->db->order_by('tbl_price_manegment.id','desc'); 
			$query = $this->db->get()->result();
			// pr($query);
			// die;
			return $query;
        	
        }
        

        public function date_invoice_getRows($time,$date)
        {
           
        	$this->db->select('tbl_price_manegment.first_price,tbl_price_manegment.title,tbl_price_manegment.drow_number,tbl_price_manegment.sce_price,tbl_price_manegment.third_price,tbl_price_manegment.for_price,tbl_price_manegment.five_price,tbl_price_manegment.date,tbl_time.time');
			$this->db->from('tbl_price_manegment');
			$this->db->join('tbl_time', 'tbl_time.id=tbl_price_manegment.time', 'inner');
			$this->db->where('tbl_price_manegment.status','Active');
			$this->db->where('tbl_price_manegment.date',$date);
			$this->db->where('tbl_time.time',$time);

			$query_data = $this->db->get()->row();
			return $query_data;
        }

        public function prev_next_data($date,$time)
        {
            $date1=date('y-m-'.'20d', strtotime($date));
            $date2=date('Y-m-d', strtotime($date1));
            
            
            $this->db->select('tbl_price_manegment.first_price,tbl_price_manegment.title,tbl_price_manegment.drow_number,tbl_price_manegment.sce_price,tbl_price_manegment.third_price,tbl_price_manegment.for_price,tbl_price_manegment.five_price,tbl_time.time,DATE_FORMAT(tbl_price_manegment.date, "%d-%m-%y") as date');
            $this->db->from('tbl_price_manegment');
			$this->db->join('tbl_time', 'tbl_time.id=tbl_price_manegment.time', 'inner');
			$this->db->where('tbl_price_manegment.status','Active');
			$this->db->where('tbl_price_manegment.date',$date2);
			$this->db->where('tbl_time.time',$time);
			$query_data = $this->db->get()->row();
			return $query_data;
        }
    }
 ?>