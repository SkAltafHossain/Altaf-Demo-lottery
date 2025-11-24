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
                '11:30 AM' => '00',
                '03:00 PM' => '00',
                '05:00 PM' => '00',
                '08:30 PM' => '00'
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
                '11:30 AM' => '0',
                '03:00 PM' => '0',
                '05:00 PM' => '0',
                '08:30 PM' => '0'
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
        
        public function get_latest_result() {
            // Get the latest result
            $latest = $this->db->select([
                'tbl_price_manegment.*',
                'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                'tbl_time.time as time_slot',
                'tbl_time.id as time_id'
            ])
            ->from('tbl_price_manegment')
            ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
            ->where('tbl_price_manegment.status', 'Active')
            ->order_by('tbl_price_manegment.date', 'desc')
            ->order_by('tbl_time.id', 'desc')
            ->limit(1)
            ->get()
            ->row_array();

            if (!$latest) {
                return null;
            }

            // Get next result (older than current)
            $next = $this->db->select([
                    'tbl_price_manegment.*',
                    'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                    'tbl_time.time as time_slot',
                    'tbl_time.id as time_id'
                ])
                ->from('tbl_price_manegment')
                ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
                ->where('tbl_price_manegment.status', 'Active')
                ->where("(tbl_price_manegment.date < '{$latest['date']}' OR (tbl_price_manegment.date = '{$latest['date']}' AND tbl_time.id < '{$latest['time_id']}'))")
                ->order_by('tbl_price_manegment.date', 'desc')
                ->order_by('tbl_time.id', 'desc')
                ->limit(1)
                ->get()
                ->row_array();

            return [
                'current' => $latest,
                'previous' => $next ? true : false, // true if there's an older result
                'next' => false // Always false for latest result as there's no newer one
            ];
        }
        
        public function get_next_result($current_date, $current_time_id) {
            // Get the next (newer) result
            $next = $this->db->select([
                    'tbl_price_manegment.*',
                    'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                    'tbl_time.time as time_slot',
                    'tbl_time.id as time_id'
                ])
                ->from('tbl_price_manegment')
                ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
                ->where('tbl_price_manegment.status', 'Active')
                ->where("(tbl_price_manegment.date > '{$current_date}' OR (tbl_price_manegment.date = '{$current_date}' AND tbl_time.id > '{$current_time_id}'))")
                ->order_by('tbl_price_manegment.date', 'asc')
                ->order_by('tbl_time.id', 'asc')
                ->limit(1)
                ->get()
                ->row_array();

            if (!$next) {
                return null;
            }

            // Get the previous result (older than current)
            $previous = $this->db->select([
                    'tbl_price_manegment.*',
                    'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                    'tbl_time.time as time_slot',
                    'tbl_time.id as time_id'
                ])
                ->from('tbl_price_manegment')
                ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
                ->where('tbl_price_manegment.status', 'Active')
                ->where("(tbl_price_manegment.date < '{$next['date']}' OR (tbl_price_manegment.date = '{$next['date']}' AND tbl_time.id < '{$next['time_id']}'))")
                ->order_by('tbl_price_manegment.date', 'desc')
                ->order_by('tbl_time.id', 'desc')
                ->limit(1)
                ->get()
                ->row_array();

            return [
                'current' => $next,
                'previous' => $previous ? true : false,
                'next' => true // Since we're getting next result, there's always a newer one (the current one)
            ];
        }
        
        public function get_previous_result($current_date, $current_time_id) {
            // Get the previous (older) result
            $previous = $this->db->select([
                    'tbl_price_manegment.*',
                    'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                    'tbl_time.time as time_slot',
                    'tbl_time.id as time_id'
                ])
                ->from('tbl_price_manegment')
                ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
                ->where('tbl_price_manegment.status', 'Active')
                ->where("(tbl_price_manegment.date < '{$current_date}' OR (tbl_price_manegment.date = '{$current_date}' AND tbl_time.id < '{$current_time_id}'))")
                ->order_by('tbl_price_manegment.date', 'desc')
                ->order_by('tbl_time.id', 'desc')
                ->limit(1)
                ->get()
                ->row_array();

            if (!$previous) {
                return null;
            }

            // Get the next result (newer than current)
            $next = $this->db->select([
                    'tbl_price_manegment.*',
                    'DATE_FORMAT(tbl_price_manegment.date, "%d/%m/%Y") as formatted_date',
                    'tbl_time.time as time_slot',
                    'tbl_time.id as time_id'
                ])
                ->from('tbl_price_manegment')
                ->join('tbl_time', 'tbl_price_manegment.time = tbl_time.id', 'left')
                ->where('tbl_price_manegment.status', 'Active')
                ->where("(tbl_price_manegment.date > '{$previous['date']}' OR (tbl_price_manegment.date = '{$previous['date']}' AND tbl_time.id > '{$previous['time_id']}'))")
                ->order_by('tbl_price_manegment.date', 'asc')
                ->order_by('tbl_time.id', 'asc')
                ->limit(1)
                ->get()
                ->row_array();

            return [
                'current' => $previous,
                'previous' => true, // Since we're getting previous result, there's always an older one
                'next' => $next ? true : false
            ];
        }
        
    }
 ?>