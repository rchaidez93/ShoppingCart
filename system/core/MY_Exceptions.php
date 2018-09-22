<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MY_Exceptions extends CI_Exceptions{
   
    public function __construct() {
        parent::__construct();
    }
    
    public function show_404() {
        
     
        set_status_header(404);
        
        print "exceptions override here";
        
        exit;
        
    }
    
    public function show_error($message, $status_code = 500, $heading = 'An Error Was Encountered'){
        print "show_error";
        exit;
    }
}