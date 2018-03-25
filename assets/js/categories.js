/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    /*not displaying the menus on page load until button are clicked*/
   $('#menu1').hide();
   $('#menu2').hide();
   $('#menu3').hide();
   $('#menu4').hide();
   
   $('#apparel').on('click',function(){
       /*easy way out*/
        $('#menu2').hide();
        $('#menu3').hide();
        $('#menu4').hide();
        $('#menu1').toggle('show');
   });
   
   $('#shoes').on('click',function(){
       /*easy way out*/
        $('#menu1').hide();
        $('#menu3').hide();
        $('#menu4').hide();
        $('#menu2').toggle('show');
   });
   
   $('#jewellery').on('click',function(){
       /*easy way out*/
        $('#menu2').hide();
        $('#menu1').hide();
        $('#menu4').hide();
        $('#menu3').toggle('show');
   });
   
   $('#accessories').on('click',function(){
       /*easy way out*/
        $('#menu2').hide();
        $('#menu3').hide();
        $('#menu1').hide();
        $('#menu4').toggle('show');
   });
   
   $('.nav-link').hover(function(){
       $(this).toggleClass("active");
   });
   
});