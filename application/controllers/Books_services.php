<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Books_services extends CI_Controller{
    
    function __construct()
    {
        parent:: __construct();
        $this->load->helper('url');
    }
    
    public function add_rating(){
        $isbn = $this->input->post("rate_info[isbn]");
        $rating = $this->input->post("rate_info[rating]");
        $comment = $this->input->post("rate_info[comment]");
        
        $data = array('rating' => $rating,
            'isbn' => $isbn,
        );
       
        //load books model
        $this->load->model("books_model");
        $result = $this->books_model->add_book_rating($data);
        
        if(!$result){
            echo json_encode(array("result"=>$result,"message"=>"There was a problem saving the rating"));
        }
        
        //check if user left a comment
        if($comment != ""){
            $data['comment'] = $comment;
            //add book comments to database
            $result2 = $this->books_model->add_book_comment($data);
            if(!$result2){
                echo json_encode(array("result"=>$result2,"message"=>"There was a problem saving the comment"));
            }
        }
        
        //Either you can print value or you can send value to database
        echo json_encode(array("result"=>$result2,"message"=>"Save was successful"));
        
    }
    
    
    public function get_rating(){
        
    }
    
}