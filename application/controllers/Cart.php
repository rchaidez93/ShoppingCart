<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Cart extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
    }
    
    public function index(){
        
        var_dump("here1");
    }
    
    
    public function get_items(){
        
        var_dump("items");
    }
    
}