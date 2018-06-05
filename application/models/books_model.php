<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class books_model extends CI_Controller{
    
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
    //add rating to database
    public function add_book_rating($rating_data){
        
        $this->db->where('ISBN',$rating_data['isbn']);
        if($rating_data['rating'] == '1'){
            $this->db->set('`one_star`','`one_star`+1',FALSE);
        }
        elseif($rating_data['rating'] == '2'){
            $this->db->set('`two_star`','`two_star`+1',FALSE);
        }
        elseif($rating_data['rating'] == '3'){
            $this->db->set('`three_star`','`three_star`+1',FALSE);
        }
        elseif($rating_data['rating'] == '4'){
            $this->db->set('`four_star`','`four_star`+1',FALSE);
        }
        else{
            $this->db->set('`five_star`','`five_star`+1',FALSE);
        }
        
        $query = $this->db->update("books_rating");
        
        //update rating for that book
        $this->update_book_rating($rating_data);
       
        return $query;
    }
    
    public function update_book_rating($book_data){
        #new rating calculation
        #((5*#rating) + (4*#rating)...) / (total number of rating); 
        
        $book_isbn = $book_data['isbn'];
        $one_star = 0;
        $two_star = 0;
        $three_star = 0;
        $four_star = 0;
        $five_star = 0;
        
        //get the individual rating
        $this->db->select("*");
        $this->db->where('isbn' , $book_data['isbn']);
        $query = $this->db->get("books_rating");
        $book_ratings = $query->result();
        $one_star = $book_ratings[0]->one_star;
        $two_star = $book_ratings[0]->two_star;
        $three_star = $book_ratings[0]->three_star;
        $four_star = $book_ratings[0]->four_star;
        $five_star = $book_ratings[0]->five_star;
        
        //calculate the new rate
        $total_number_ratings = ($one_star+$two_star+$three_star+$four_star+$five_star);
        $new_ratings = (($one_star*1) + ($two_star*2) + ($three_star*3) + ($four_star*4) + ($five_star*5)) / ($total_number_ratings);
        
        //update rating for the book
        $this->db->where('ISBN',$book_data['isbn']);
        $this->db->set('`rating`',$new_ratings);
        $this->db->update("bx_books");
        
    }
    
}