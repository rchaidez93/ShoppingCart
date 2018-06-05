/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){

    $('#openNav').on('click',function(){
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    });

    $('#closeNav').on('click',function(){
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    });
    
    $(".ratings-dropdown").hide();
    $(".price-dropdown").hide();
    $('.publication-dropdown').hide();
    
    $(".dropdown-ratings").on('click',function(){
        $(".ratings-dropdown").toggle('&#8679');
    });
    $(".dropdown-price").on('click',function(){
        $(".price-dropdown").toggle();
    });
    $(".publication-years").on('click',function(){
        $(".publication-dropdown").toggle();
    });
   
});