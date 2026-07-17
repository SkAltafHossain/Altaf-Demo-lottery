<?php


class Home_Model extends CI_model
{
    public function get_time()
  	{
  		$this->db->select('*');
        $this->db->where('status','Active');
        $this->db->order_by('id', 'ASC');
        $parent = $this->db->get('tbl_time');
   
        $time = $parent->result();
 
        return $time;
  	}
    
  	public function get_time1()
  	{
  	    $currentdate=date('Y-m-d');
  		$this->db->select('tbl_price_manegment.status as statusPrice');
  		$this->db->from('tbl_price_manegment');
        $this->db->where('tbl_price_manegment.time','1');
        $this->db->where('tbl_price_manegment.date',$currentdate);
        $this->db->where('tbl_price_manegment.status','Active');
        
        $parent = $this->db->get();
   
        $time = $parent->result();
 
        return $time;
  	}  
  	
  	public function get_time2()
  	{
  	    $currentdate=date('Y-m-d');
  		$this->db->select('tbl_price_manegment.status as statusPrice');
  		$this->db->from('tbl_price_manegment');
        $this->db->where('tbl_price_manegment.time','2');
        $this->db->where('tbl_price_manegment.date',$currentdate);
        $this->db->where('tbl_price_manegment.status','Active');
        
        $parent = $this->db->get();
   
        $time = $parent->result();
 
        return $time;
  	} 
  	
  	public function get_time3()
  	{
  	    $currentdate=date('Y-m-d');
  		$this->db->select('tbl_price_manegment.status as statusPrice');
  		$this->db->from('tbl_price_manegment');
        $this->db->where('tbl_price_manegment.time','3');
        $this->db->where('tbl_price_manegment.date',$currentdate);
        $this->db->where('tbl_price_manegment.status','Active');
        
        $parent = $this->db->get();
   
        $time = $parent->result();
 
        return $time;
  	} 

    public function get_time4()
  	{
  	    $currentdate=date('Y-m-d');
  		  $this->db->select('tbl_price_manegment.status as statusPrice');
  		  $this->db->from('tbl_price_manegment');
  		  $this->db->where('tbl_price_manegment.time','4');
  		  $this->db->where('tbl_price_manegment.date',$currentdate);
  		  $this->db->where('tbl_price_manegment.status','Active');
        
        $parent = $this->db->get();
   
        $time = $parent->result();
 
        return $time;
  	} 

  	public function getInactiveData(){

		  $this->db->select('DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as date_1,tbl_price_manegment.id,tbl_time.time as time_t ');
    	$this->db->from('tbl_price_manegment');
    	$this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id');
    	$this->db->where('tbl_price_manegment.status','Inactive');
    	$third_price=$this->db->get()->row();
        return $third_price;

	}

  public function getDataOneMonth(){

    // $date=date('Y-m-d');
     
     $date2=date('Y-m-d', strtotime('-31 day'));
     
     $this->db->where('date<=',$date2);
     $this->db->where('status','Active');
     $this->db->delete('tbl_price_manegment');
     return 0;
  }
}