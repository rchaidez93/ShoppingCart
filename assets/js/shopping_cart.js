/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
   //$('#example').DataTable();
   
   
            
    $( "#cart_dialog" ).dialog({
        autoOpen: false, 
        modal: true,
        buttons: {
           OK: function() {$(this).dialog("close");}
        }
     });
     
    $("#example").on('click','#add_cart',function() {
       $( "#cart_dialog" ).dialog( "open" );
    });
            
       
  
    
    
});

