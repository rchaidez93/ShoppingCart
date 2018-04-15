<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
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
            $title = strlen($books['Book-Title']) > 15 ? substr($books['Book-Title'],0,15)."..." : $books['Book-Title'];
    ?>
        
            <tr>
                <td style = 'width:5px;'><?php echo "<img style='height: 65px;' alt = '". $books['Book-Title']."' src='data:image/jpeg;base64,".$imageData."'<br>". $title?></td>
                <td><?php echo $books['Book-Author']?></td>
                <td><?php echo $books['Publisher']?></td>
                <td><?php echo $books['price']?></td>
            </tr>
        
    <?php
        }
    ?>
        </tbody>
    </table>
</div>