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
        $this->load->view("Categories/shoppinglist");
        $this->load->view("layout/footer");
    }
    
}