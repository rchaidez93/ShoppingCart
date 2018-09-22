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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/categories.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/shopping_cart.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/ratings.js"></script>
    </head>
    <body>
        

            <div class ='header-site'>
                <img src = "<?php echo base_url('assets/images/bookheader.jpg'); ?>"> 
            </div>
            <div class = 'checkout-box' >
                <div class ="checkout">
                    <span>Cart</span>
                    <div>
                        <button id="view_cart" class="ui-button ui-widget ui-corner-all" style="width: 75px;height: 23px;font-size: 11px;">View Cart</button>

                </div>
                </div>
                
                <div id = "checkout-info">
                    <table id = "checkout-table">
                        <tr>
                            <th># of Items</th>
                            <th>Total</th>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </table>
                </div>
                <div id = "go-checkout">
                    <button id = "checkout-button" class="ui-button ui-widget ui-corner-all">Check-out</button>

                </div>
            </div>
            
        
   
    

