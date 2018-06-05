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
        $this->load->model('books_model');
        $this->load->view("layout/header");
        
        $data = array();
        $start_fetch = 10;
        
        //$books_found = $this->get_books_test();
        $books_found = $this->books_model->get_books($start_fetch);
        
        $data['books_found'] = $books_found;
        $this->load->view("Categories/shoppinglist",$data);
        $this->load->view("layout/footer");
    }
    
    
    
}