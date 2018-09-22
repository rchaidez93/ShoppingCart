<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class redirected extends CI_Controller{
    
    public function index(){
        //$this->output->view("layout/header");
        //set_status_header(404);
        
        $test = "404 ERROR HEREsss";
        show_error($test, 404);
    }
    
    
}