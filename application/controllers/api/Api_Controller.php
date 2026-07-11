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

        public function first_price_jodi()
        {
            // Get all results in the new format from model
            $results = $this->Api_Model->get_all_first_price_jodi();
            
            $response = [
                'status' => 'success',
                'data' => array_values($results) // Ensure we return a sequential array
            ];
            
            if (empty($results)) {
                $response['status'] = 'success';
                $response['data'] = [];
            }

            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($response));
        }
        
        public function first_price_last()
        {
            // Get all results in the new format from model
            $results = $this->Api_Model->get_all_first_price_last();
            
            $response = [
                'status' => 'success',
                'data' => array_values($results) // Ensure we return a sequential array
            ];
            
            if (empty($results)) {
                $response['status'] = 'success';
                $response['data'] = [];
            }

            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($response));
        }
        
        // Single API: get all results with PDF, ordered latest first
        public function latest_results_pdf()
        {
            $results = $this->Api_Model->get_all_results_with_pdf_latest();
            
            // Append full PDF URL for convenience
            foreach ($results as &$row) {
                if (!empty($row['pdf_file'])) {
                    $row['pdf_url'] = base_url($row['pdf_file']);
                } else {
                    $row['pdf_url'] = null;
                }
            }
            unset($row);
            
            $response = [
                'status' => 'success',
                'data' => $results
            ];
            
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($response));
        }
    }
        
    
?>