<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class Categories extends CI_Controller{
    function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }
    
    public function index(){
        $this->load->view("layout/header");
        $data = array();
        $books_found = $this->get_books_test();
        $data['books_found'] = $books_found;
        $this->load->view("Categories/shoppinglist",$data);
        $this->load->view("layout/footer");
    }
    
    public function get_books_test(){
        
        $query = $this->db->query("select * from bx_books LIMIT 60");
        return $query->result_array();
        
        
    }
    
}