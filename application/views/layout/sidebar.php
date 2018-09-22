<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
var base_url = '<?php echo base_url();?>';    
</script>
<div id="mySidenav" class="sidenav">
    <button class="home-btn"><a href="/shoppingcart"><i class="fa fa-home"></i></a></button>

    <a  class="closebtn" id="closeNav">&times;</a>
    <a style = "cursor: pointer" class="dropdown-ratings">Ratings &#8681;</a>
    <div class = "ratings-dropdown" style = "background-color: #273037;cursor:pointer;">
    </div>
    <a style = "cursor:pointer" class = "dropdown-price">Price &#8681;</a>
    <div class = "price-dropdown" style = "background-color: #273037;cursor:pointer;">
    </div>
    <a class = "publication-years" style = "cursor:pointer">Publication &#8681;</a>
    <div class = "publication-dropdown" style = "background-color: #273037;cursor:pointer;">
    </div>
    <a href="<?php echo base_url() ?>contact">Contact</a>
</div>
<div id="main">
    <span style="font-size:30px;cursor:pointer;position: fixed;" id="openNav">&#9776; Filter</span>
</div>