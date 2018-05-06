<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Richard and Amber's Store</title>
        <link href="<?php echo base_url('assets/css/datatables.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/header.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/shoppingtable.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url('assets/css/footer.css'); ?>" rel="stylesheet" type="text/css" media="screen" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/categories.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/checkout.js"></script>
    </head>
    <body>
        

            <div class ='header-site'>
                <img src = "<?php echo base_url('assets/images/bookheader.jpg'); ?>"> 
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
            
        
   
    

