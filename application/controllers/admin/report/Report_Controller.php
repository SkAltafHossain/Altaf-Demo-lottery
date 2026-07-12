   <?php

   class Report_Controller extends CI_controller
	{
		
		function __construct()   
		{
		  	parent::__construct(); 		
		  	$this->load->model('Report/Report_Model');
			$this->load->helper(array('common_helper', 'string', 'form', 'security', 'text'));		
			if(($this->session->userdata('adminDetails')==NULL))
			{
			   return redirect('admin');
			}
        } 
		public function today_report()
		{	 

			 $date=date('Y-m-d');
			$this->db->where('status <>', 'Delete');
			$this->db->where('date', $date);
			$this->db->order_by('id', 'desc');
			$price_data=$this->db->get('tbl_price_manegment')->result();
			$this->data['price_data']=$price_data;
			$this->data['page_title']='Lottery | Today Report';  
			$this->data['subview']='report/today_report';
			// echo "<pre>";
			// print_r($this->data);die();
			$this->load->view('admin/layout/default', $this->data);
		}
		public function all_report()
		{
			$this->db->where('status <>', 'Delete');
			$this->db->order_by('id', 'desc');
			$price_data=$this->db->get('tbl_price_manegment')->result();
			$this->data['price_data']=$price_data;
			$this->data['page_title']='Lottery | Today Report';  
			$this->data['subview']='report/all_report';
			// echo "<pre>";
			// print_r($this->data);die();
			$this->load->view('admin/layout/default', $this->data);
		}
		public function date_wise()
		{
			$fromdate = $this->input->post('fromdate');
	    	$todate = $this->input->post('todate');
	    	$all_price_search=$this->Report_Model->all_price_search($fromdate,$todate);
	    	//pr($all_price_search);die();
	    	echo '<table class="table table-striped table-bordered table-hover dataTables-example">
                      <thead>
                          <tr>
                                <th>Sl.</th>
		                        <th>Date</th>
		                        <th>Time</th>
		                        <th>1st Price</th>
		                        <th>2nd Price</th>
		                        <th>3rd Price</th>
		                        <th>4th Price</th>
		                        <th>5th Price</th>
                             
                            </tr>
                          </thead>
                          <tbody id="">';
                        if(!empty($all_price_search))
                        {
            			    foreach ($all_price_search as $key => $value) {
                             $id=$key+1;
                    	     echo '             	
                                <tr class="gradeX">
                                <td>'.$id.'</td>                                                      
                                <td>'.$value->date.'</td> 
                                <td>'.$value->time.'</td> 
                                <td>'.$value->first_price.'</td> 
                                <td>'.$value->sce_price.'</td> 
                                <td>'.$value->third_price.'</td> 
                                <td>'.$value->for_price.'</td> 
                                <td>'.$value->five_price.'</td>                          
                            </tr>
                            </tbody>
                             ';
                            }  
                          }
                          else
                          {
                             echo' <p>Data Not Fount</p>';
                          }
                echo '</table>';
		}
	}
   ?>