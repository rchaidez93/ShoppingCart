<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class books_service extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    /*get the total number of books the are passed in the param*/
    public function get_books($number_of_books){
        $this->db->limit($number_of_books);
        $query = $this->db->get('bx_books');
        if($query->num_rows() > 0){
            return $query->result_array();
        }
    }
    
}