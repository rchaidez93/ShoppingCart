<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="mySidenav" class="sidenav">
    <a  class="closebtn" id="closeNav">&times;</a>
    <a style = "cursor: pointer" class="dropdown-ratings">Ratings &#8681;</a>
    <div class = "ratings-dropdown" style = "background-color: #273037;">
        <a>5-star &#9733;&#9733;&#9733;&#9733;&#9733;</a>
        <a>4-star &#9733;&#9733;&#9733;&#9733;</a>
        <a>3-star &#9733;&#9733;&#9733;</a>
        <a>2-star &#9733;&#9733;</a>
        <a>1-star &#9733;</a>
    </div>
    <a style = "cursor:pointer" class = "dropdown-price">Price &#8681;</a>
    <div class = "price-dropdown">
        <a>$1-$10</a>
        <a>$10-$20</a>
        <a>$20-$25</a>
        <a>$25-$30</a>
    </div>
    <a href="#">Publication &#8681;</a>
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
                <th>Publisher</th>
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
                <td style = 'width:5px;'><?php echo "<img style='height: 65px;' alt = '". $books['book_title']."' src='data:image/jpeg;base64,".$imageData."'<br>". $title?></td>
                <td><?php echo $books['book_author']?></td>
                <td><?php echo $books['publisher']?></td>
                <td><?php echo $books['price']?></td>
            </tr>
        
    <?php
        }
    ?>
        </tbody>
    </table>
</div>