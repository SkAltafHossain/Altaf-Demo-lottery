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
    
        public function latest_result() {
            // Get the latest result with next result from the model
            $result = $this->Api_Model->get_latest_result();
            
            if ($result && isset($result['current'])) {
                $response = [
                    'status' => 'success',
                    'data' => $result
                ];
            } else {
                $response = [
                    'status' => 'success',
                    'data' => [
                        'current' => null,
                        'previous' => null,
                        'next' => null
                    ],
                    'message' => 'No results found'
                ];
            }
            
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($response));
        }
        
        public function next_result() {
            // Get current date and time_id from request
            $current_date = $this->input->get('current_date');
            $current_time_id = $this->input->get('current_time_id');
            
            if (empty($current_date) || empty($current_time_id)) {
                $this->output
                     ->set_status_header(400)
                     ->set_content_type('application/json')
                     ->set_output(json_encode([
                         'status' => 'error',
                         'message' => 'current_date and current_time_id parameters are required'
                     ]));
                return;
            }
            
            // Get the next result
            $result = $this->Api_Model->get_next_result($current_date, $current_time_id);
            
            if ($result && isset($result['current'])) {
                $response = [
                    'status' => 'success',
                    'data' => $result
                ];
            } else {
                $response = [
                    'status' => 'success',
                    'data' => [
                        'current' => null,
                        'previous' => false,
                        'next' => false
                    ],
                    'message' => 'No newer results found'
                ];
            }
            
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($response));
        }
        
        public function previous_result() {
            // Get current date and time_id from request
            $current_date = $this->input->get('current_date');
            $current_time_id = $this->input->get('current_time_id');
            
            if (empty($current_date) || empty($current_time_id)) {
                $this->output
                     ->set_status_header(400)
                     ->set_content_type('application/json')
                     ->set_output(json_encode([
                         'status' => 'error',
                         'message' => 'current_date and current_time_id parameters are required'
                     ]));
                return;
            }
            
            // Get the previous result
            $result = $this->Api_Model->get_previous_result($current_date, $current_time_id);
            
            if ($result && isset($result['current'])) {
                $response = [
                    'status' => 'success',
                    'data' => $result
                ];
            } else {
                $response = [
                    'status' => 'success',
                    'data' => [
                        'current' => null,
                        'previous' => false,
                        'next' => false
                    ],
                    'message' => 'No older results found'
                ];
            }
            
            $this->output
                 ->set_content_type('application/json')
                 ->set_output(json_encode($response));
        }
    }
        
    
?>