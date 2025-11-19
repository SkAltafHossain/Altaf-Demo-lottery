<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    //include Rest Controller library
    //require APPPATH . '/libraries/REST_Controller.php';

    class Api_Controller extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('common_helper', 'string', 'form', 'security','url'));
            //load user model
            $this->load->model('api/Api_Model');
            $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode, 'ONLY_FULL_GROUP_BY', ''));");
            date_default_timezone_set('Asia/Kolkata');
            Header('Access-Control-Allow-Origin: *'); //for allow any domain, insecure
            Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
            Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
            header('Content-Type: application/json'); //method allowed
        }
        /*<====================Customer Api List==================>*/


        public function date_result()
        {
            $number=$this->input->post('number');
            
            $fdata = $this->Api_Model->date_only($number);
            
            $number1=null;
            
            if($number){
              $number1=$number;  
            }
            else{
                $number1="null";
            }
            
            $data = Array();
            if($fdata!=null){
                
                foreach ($fdata as $key => $value) {

                    

                    $first_price_11=$this->Api_Model->date_search_getRows("11:00 AM",$value->date);
                    $first_price_3=$this->Api_Model->date_search_getRows("03:00 PM",$value->date);
                    $first_price_7=$this->Api_Model->date_search_getRows("07:00 PM",$value->date);
                
                    $data[$key]['date']=date('d-m-y', strtotime($value->date));

                    if($first_price_11!=0){
                        $slug1=trim($first_price_11);
                        $slug1=str_replace(" ",'',$slug1);
                        $slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
                        $first_price_last=substr($slug1,7, 1);
                        
                        if($first_price_last==$number){
                            $data[$key]['mor']=$first_price_last."==Selected";
                        }
                        else{
                            $data[$key]['mor']=$first_price_last."==null";
                        }
                        
                        
                            
                    }
                    else{
                        $data[$key]['mor']=" ";
                    }

                    if($first_price_3!=0){
                        $slug1=trim($first_price_3);
                        $slug1=str_replace(" ",'',$slug1);
                        $slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
                        $first_price_last=substr($slug1,7, 1);
                        
                        if($first_price_last==$number){
                            $data[$key]['day']=$first_price_last."==Selected";
                        }
                        else{
                            $data[$key]['day']=$first_price_last."==null";
                        }
                        
                    }
                    else{
                        $data[$key]['day']=" ";
                    }

                    if($first_price_7!=0){
                        $slug1=trim($first_price_7);
                        $slug1=str_replace(" ",'',$slug1);
                        $slug1=preg_replace('/[^A-Za-z0-9\-]/', '', $slug1);
                        $first_price_last=substr($slug1,7, 1);
                        
                        if($first_price_last==$number){
                            $data[$key]['eve']=$first_price_last."==Selected";
                        }
                        else{
                            $data[$key]['eve']=$first_price_last."==null";
                        }
                            
                    }
                    else{
                        $data[$key]['eve']=" ";
                    }
                }
                $data1['return_data']=$data;
                $data1['return_message']='Retrive Successfuly';
                $data1['return_status']=1;
                echo json_encode($data1);   
            }
            else
            {
                $data1['return_data']=$data;
                $data1['return_message']='No data were found.';
                $data1['return_status']=0;
                echo json_encode($data1); 
            }

        }

        public function invoice_carent_data()
        {
           $invoice_data = $this->Api_Model->carrent_data();
           
               if(!empty($invoice_data))
                {
                    $data['return_data']=$invoice_data;
                    $data['return_message']='Retrive Successfuly';
                    $data['return_status']=1;
                    echo json_encode($data);
                }
                else
                {
                    $data['return_message']='No data were found.';
                    $data['return_status']=0;
                    echo json_encode($data);
                }
        }

        public function invoice_prev_next_data()
        {
            $date=$this->input->post('date');
            $time=$this->input->post('time');
          
            if(!empty($date) && !empty($time))
            {
                $fdata = $this->Api_Model->prev_next_data($date,$time);
                if(!empty($fdata))
                {
                    $data['return_data']=[$fdata];
                    $data['return_message']='Retrive Successfuly';
                    $data['return_status']=1;
                    echo json_encode($data);
                }
                else
                {
                    $data['return_message']='No data were found.';
                    $data['return_status']=0;
                    echo json_encode($data); 
                }
            }
        }
            
    
        }
        
    
?>