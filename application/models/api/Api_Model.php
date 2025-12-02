<?php
    
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Api_Model extends CI_Model  
    {

        public function __construct()
        {
            parent::__construct();
        }

        public function get_all_first_price_jodi()
        {
            // First, get all time slots to ensure we include all of them
            $time_slots = [
                '11:30 AM' => '--',
                '03:00 PM' => '--',
                '05:00 PM' => '--',
                '08:30 PM' => '--'
            ];
            
            // Get all results from database
            $this->db->select([
                'tbl_price_manegment.first_price',
                'DATE_FORMAT(tbl_price_manegment.date, "%d-%m-%Y") as result_date',
                'tbl_time.time as result_time',
                'tbl_time.id as time_id'
            ]);
            $this->db->from('tbl_price_manegment');
            $this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left');
            $this->db->where('tbl_price_manegment.status', 'Active');
            $this->db->order_by('tbl_price_manegment.date', 'desc');
            $this->db->order_by('tbl_time.id', 'asc');
            
            $results = $this->db->get()->result();
            
            // Format the results
            $formatted_results = [];
            
            foreach ($results as $row) {
                $date = $row->result_date;
                $time = $row->result_time;
                $jodi = substr($row->first_price, -2);
                
                // Initialize date entry if it doesn't exist
                if (!isset($formatted_results[$date])) {
                    $formatted_results[$date] = array_merge(['date' => $date], $time_slots);
                }
                
                // Update the time slot if it exists in our predefined slots
                if (isset($formatted_results[$date][$time])) {
                    $formatted_results[$date][$time] = $jodi;
                }
            }
            
            // Convert to indexed array and ensure all dates have all time slots
            $final_results = [];
            foreach ($formatted_results as $date => $entry) {
                $final_results[] = array_merge(['date' => $date], $time_slots, $entry);
            }
            
            return $final_results;
        }
        
        public function get_all_first_price_last()
        {
            // First, get all time slots to ensure we include all of them
            $time_slots = [
                '11:30 AM' => '-',
                '03:00 PM' => '-',
                '05:00 PM' => '-',
                '08:30 PM' => '-'
            ];
            
            // Get all results from database
            $this->db->select([
                'tbl_price_manegment.first_price',
                'DATE_FORMAT(tbl_price_manegment.date, "%d-%m-%Y") as result_date',
                'tbl_time.time as result_time',
                'tbl_time.id as time_id'
            ]);
            $this->db->from('tbl_price_manegment');
            $this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left');
            $this->db->where('tbl_price_manegment.status', 'Active');
            $this->db->order_by('tbl_price_manegment.date', 'desc');
            $this->db->order_by('tbl_time.id', 'asc');
            
            $results = $this->db->get()->result();
            
            // Format the results
            $formatted_results = [];
            
            foreach ($results as $row) {
                $date = $row->result_date;
                $time = $row->result_time;
                $last_digit = substr($row->first_price, -1); // Get only the last digit
                
                // Initialize date entry if it doesn't exist
                if (!isset($formatted_results[$date])) {
                    $formatted_results[$date] = array_merge(['date' => $date], $time_slots);
                }
                
                // Update the time slot if it exists in our predefined slots
                if (isset($formatted_results[$date][$time])) {
                    $formatted_results[$date][$time] = $last_digit;
                }
            }
            
            // Convert to indexed array and ensure all dates have all time slots
            $final_results = [];
            foreach ($formatted_results as $date => $entry) {
                $final_results[] = array_merge(['date' => $date], $time_slots, $entry);
            }
            
            return $final_results;
        }
        
        // Get all results (with PDF path) ordered latest first
        public function get_all_results_with_pdf_latest()
        {
            $this->db->select([
                'tbl_price_manegment.uniqcode',
                'tbl_price_manegment.title',
                'tbl_price_manegment.drow_number',
                'tbl_price_manegment.first_price',
                'tbl_price_manegment.sce_price',
                'tbl_price_manegment.third_price',
                'tbl_price_manegment.for_price',
                'tbl_price_manegment.five_price',
                'tbl_price_manegment.pdf_file',
                'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as result_date',
                'tbl_time.time as result_time',
                'tbl_time.id as time_id'
            ]);
            $this->db->from('tbl_price_manegment');
            $this->db->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left');
            $this->db->where('tbl_price_manegment.status', 'Active');
            $this->db->order_by('tbl_price_manegment.date', 'desc');
            $this->db->order_by('tbl_price_manegment.time', 'desc');
            $this->db->order_by('tbl_time.id', 'desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        
    }
 ?>