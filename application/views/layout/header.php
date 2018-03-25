<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Richard and Amber's Store</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/categories.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/checkout.js"></script>
        <link href="<?php echo base_url('assets/css/header.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/shoppingtable.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/footer.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        
        <div id='table'>
                <table class = "sidebar-menu">
                    <tr>
                        <td id = "apparel">
                            <span>Apparel</span>
                        </td>
                        <td id = "shoes">
                            <span>Shoes</span>
                        </td>
                    </tr>
                    <tr>
                        <td id = "accessories">
                            <span>Access.</span>
                        </td>
                        <td id = "jewellery">
                            <span>Jewelry</span>
                        </td>
                    </tr>
                </table>
        </div>
        <div id = 'menu1'>
            <nav class="nav2" role="navigation">
            </nav>
            <nav class="nav2" role="navigation">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/">T-Shirts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/">Shorts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/speaking/">Jeans </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ultimateangular.com/courses/" target="_blank">Dress shirts</a>
                </li>
            </ul>
            </nav>
        </div>
        <div id = 'menu2'>
            <nav class="nav2" role="navigation">
            </nav>
            <nav class="nav2" role="navigation">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/">Casual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/">Running</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/speaking/">Sandals </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ultimateangular.com/courses/" target="_blank">Dress</a>
                </li>
            </ul>
            </nav>
        </div>
        <div id = 'menu3'>
            <nav class="nav2" role="navigation">
            </nav>
            <nav class="nav2" role="navigation">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/">Neckwear</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/">Hats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/speaking/">Belts </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ultimateangular.com/courses/" target="_blank">Glasses</a>
                </li>
            </ul>
            </nav>
        </div>
        <div id = 'menu4'>
            <nav class="nav2" role="navigation">
            </nav>
            <nav class="nav2" role="navigation">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="nav-link" href="/">Earings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about/">Cufflinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/speaking/">Tie Pins </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://ultimateangular.com/courses/" target="_blank">Necklaces</a>
                </li>
            </ul>
            </nav>
        </div>
            
            <div class ='header-site'>
                <img src = "<?php echo base_url('assets/images/mensbanner.jpg'); ?>"> 
            </div>
            <div class = 'checkout-box' >
                <div class ="checkout">
                    <span>Cart</span>
                </div>
                <div id = "checkout-info">
                    <table id = "checkout-table">
                        <tr>
                            <th># of Items</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>$10.00</td>
                        </tr>
                    </table>
                </div>
                <div id = "go-checkout">
                    <button id = "checkout-button" class="ui-button ui-widget ui-corner-all">Check-out</button>

                </div>
            </div>
            
        
   
    

