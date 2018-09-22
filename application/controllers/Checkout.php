<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Checkout extends CI_Controller{
    
    function __construct() {
        
        $segments = array();
        
        $segments[0] = "redirected";
        $segments[1] = "index";
      
        
        //load_class("redirected", "controllers");
        $test = "404 ERROR HERE";
        //echo $this->show_error($test, 404);
        
    }
    
    public function index(){
        $this->load->view("layout/header");
        var_dump("checkout");
    }
    
    
} 