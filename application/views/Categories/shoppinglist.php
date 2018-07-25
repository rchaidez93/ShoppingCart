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
    <a  class="closebtn" id="closeNav">&times;</a>
    <a style = "cursor: pointer" class="dropdown-ratings">Ratings &#8681;</a>
    <div class = "ratings-dropdown" style = "background-color: #273037;cursor:pointer;">
        <a>5-star &#9733;&#9733;&#9733;&#9733;&#9733;</a>
        <a>4-star &#9733;&#9733;&#9733;&#9733;</a>
        <a>3-star &#9733;&#9733;&#9733;</a>
        <a>2-star &#9733;&#9733;</a>
        <a>1-star &#9733;</a>
    </div>
    <a style = "cursor:pointer" class = "dropdown-price">Price &#8681;</a>
    <div class = "price-dropdown" style = "background-color: #273037;cursor:pointer;">
        <a>$1-$10</a>
        <a>$10-$20</a>
        <a>$20-$25</a>
        <a>$25-$30</a>
    </div>
    <a class = "publication-years" style = "cursor:pointer">Publication &#8681;</a>
    <div class = "publication-dropdown" style = "background-color: #273037;cursor:pointer;">
        <a>1990-1995</a>
        <a>1995-2000</a>
        <a>2000-2005</a>
        <a>2005-2010</a>
    </div>
    <a href="#">Contact</a>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer;position: fixed;" id="openNav">&#9776; Filter</span>
</div>

<div class = "shopping-table-container">
    <table id="example" class ="display" style = "width:100%" border="1px">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publication</th>
                <th>Rating</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
    <?php 
        foreach($books_found as $books)
        {
            $imageData = base64_encode(file_get_contents($books['Image-URL-S']));
            $title = strlen($books['book_title']) > 15 ? substr($books['book_title'],0,15)."..." : $books['book_title'];
    ?>

            <tr>
                <td id = "<?php echo $books['ISBN'];?>" style = 'width:5px;'><?php echo "<img style='height: 65px;' alt = '". $books['book_title']."' src='data:image/jpeg;base64,".$imageData."'<br>". $title?></td>
                <td><?php echo $books['book_author']?></td>
                <td><?php echo ($books['year_of_publication'] != 0) ? $books['year_of_publication'] : 'N/A';?></td>
                <td>
                    <div>
                    <?php if($books['rating'] == 1) { ?>    
                        &#9733;
                    <?php } ?>
                        <?php if($books['rating'] == 2) { ?>    
                        &#9733;&#9733;
                    <?php } ?>
                        <?php if($books['rating'] == 3) { ?>    
                        &#9733;&#9733;&#9733;
                    <?php } ?>
                        <?php if($books['rating'] == 4) { ?>    
                        &#9733;&#9733;&#9733;&#9733;
                    <?php } ?>
                        <?php if($books['rating'] == 5) { ?>    
                        &#9733;&#9733;&#9733;&#9733;&#9733;
                    <?php } ?>
                        <?php if($books['rating'] == 0) { ?>    
                        &#9734;&#9734;&#9734;&#9734;&#9734;
                    <?php } ?>
                    </div>
                    <button id = 'add_rating' class="ui-button ui-widget ui-corner-all">Add Rating</button></td>
                <td><div><?php echo '$'.$books['price'].'.00'?></div><button id = "add_cart" class="ui-button ui-widget ui-corner-all">Add to Cart</button></td>
            </tr>
        
    <?php
        }
    ?>
        </tbody>
    </table>
</div>


<div class = "ratings_dialog" title = "Rate this book!">

    <div class = "star_selection">
        <div>
            <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">&#9734;</label></span>
            <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">&#9734;</label></span>
            <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">&#9734;</label></span>
            <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">&#9734;</label></span>
            <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">&#9734;</label></span>
        </div>
    </div>
   <div style="padding: 80px;padding-bottom: 20px;text-align: center;">
       <span> Leave comment</span>
       <textarea id = "comment" rows="4" cols="30" name="comment" form="usrform" placeholder="Enter text here..."></textarea>
    </div>
    
</div>

<div id = "cart_dialog" title = "Dialog Title goes here...">This my first jQuery UI Dialog! 
    
</div>