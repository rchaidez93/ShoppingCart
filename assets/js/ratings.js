/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var rate_info = {};
$(document).ready(function(){
  var table =$('#example').DataTable();
   
   $( ".ratings_dialog" ).dialog({
        autoOpen: false, 
        modal: true,
        width: '500px',
        buttons: {
           'Rate!': function() {
               ajax_service_call();
               rate_info = {};
               //get new data from ajax, redraw table;
               update_table();
               $(this).dialog("close");
           }
        }
    });
    
    table.on('click','#add_rating',function() {
        $( ".ratings_dialog" ).dialog( "open" );
        var parent = $(this).parent().parent("tr");
        var child = parent.children()[0];
        var book_title = child.childNodes[0].alt;
        rate_info.book_title = child.childNodes[0].alt;
       // console.log(book_title);
        var book_isbn = $(this).parent("td").parent("tr").children()[0].id;
       // console.log(book_isbn);
        rate_info.isbn = $(this).parent("td").parent("tr").children()[0].id;
       
       
       $('input:radio').change(
        function(){
            if($('#rate_message').length > 0){$('#rate_message').remove();}
            rate_info.rating = this.value;
            rate_string = "<div id = 'rate_message' style='text-align: center;'>Thanks for the "+rate_info.rating+"-star rating!</div>";
            $(".ratings_dialog").append(rate_string);
        }); 
    });
            
       
    $(".star_selection input:radio").attr("checked", false);
    $('.star_selection input').click(function () {
        $(".star_selection span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    
    function ajax_service_call(){
        $.ajax({
            type: 'post',
            url: base_url + "index.php/Books_services/add_rating",
            data:{rate_info},
            dataType:'json',
            success:function(result){
                console.log(result);
            },
            error:function(){
                console.log("fail");
            }
        });
    }
    
    function update_table(){
       // table.clear().draw();
        
    }
});

