<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Richard and Amber's Store</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/checkout.js"></script>
        <link href="<?php echo base_url('assets/css/header.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/footer.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <div id ='wrapper'> 
            <div class ='header-site'></div>
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
            </div>
        
    
    

