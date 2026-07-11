<?php
	/**
	 * 
	 */
	class Report_Model extends CI_model
	{
		
		public function all_price_search($fromdate,$todate)
	    {
	 	    $this->db->select('tbl_price_manegment.uniqcode,tbl_price_manegment.first_price,tbl_price_manegment.sce_price,tbl_price_manegment.third_price,tbl_price_manegment.for_price	,tbl_price_manegment.five_price,tbl_price_manegment.time,tbl_price_manegment.date');
	 	    $this->db->from('tbl_price_manegment');
	 	
	 	    $this->db->where('tbl_price_manegment.status','Active');
	        if(!empty($todate) && !empty($fromdate) )
				{
					$this->db->where('tbl_price_manegment.date BETWEEN "'. date('Y-m-d', strtotime($fromdate)). '" AND "'. date('Y-m-d 23:59:59', strtotime($todate)).'"');
				}else if(!empty($fromdate))
				{
					$this->db->where('DATE(tbl_price_manegment.date)',$fromdate);
				}
	 	    $this->db->order_by('tbl_price_manegment.id', 'desc');
	        $all_price=$this->db->get()->result();
	        return $all_price;  
	    }
	   
	}