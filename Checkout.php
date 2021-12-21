<?php include ('php/header.php');?>

<html>
    <head>
        <meta charset="utf-8">
        
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--says edge of website should follow edge of device, initial scale means the site should scale the content -->
        <style>
            #crderror {font-family: arial; text-align: 
                       left;background-color: Grey; color: red;}
        #addrerror {font-family: arial; text-align: 
                        left;background-color: Grey; color: red;}
        #nerror {font-family: arial; text-align: 
                     left;background-color: Grey; color: red;}
        #screrror {font-family: arial; text-align: 
                       left;background-color: Grey; color: red;}
            table, th, td {
                
                display: inline-block;
            }
            #table-scroll {
                height:600px;
                overflow:auto;  
                margin-top:20px;
            }
        </style>
    </head>
    <body>
        
        <br>
        <br>
        <br>
        <br>
        <div id="checkout">
            <a href='products.php'><img src="images/2arrow.png" alt="->" width="30" height="20"></a>
            <div class = form>
                <div id="nerror"></div><input id="EnName" type="text" name="Name" placeholder="Name">

                <div id="addrerror"></div><input id="EnAddr" type="text" name="Address" placeholder="Address">

                <div id="screrror"></div> <input id="EnScr" type="password" name="Security Number" placeholder="Security number">

                <div id="crderror"></div><input id="EnCrd" type="password" name="Cardnumber" placeholder="Card Number">
                <br>
                <button type="submit" name="signup-submit" onclick="toconfirm()">Confirm</button>
            </div>

        </div>
        <div id="confirmscreen" style="display:none">
            <div id="cardinfo"></div>
            <div id="pricefinal"></div>
            <button onclick="confirm()">Finalise order</button>
        </div>
        <div id="confirmed" style="display:none">
            Your order has been placed successfully
            <a href='products.php'><img src="images/2arrow.png" alt="to product" width="30" height="20"></a>
        </div>
        <div id="table-scroll" align="right" style="display:none">
            <table>
                <td> <a href='Basket.php'><img src="basket.png" alt="->" width="100" height="60"></a> </td>
                <td> Cost: <div id="Cost">0</div> 
                <tr><th>Image</th><th>Name</th><th>Price</th><th>X</th>
            </table>
        </div>
        <script src ="scripts/Checkout.js"></script>
        <script src ="scripts/Basket.js"></script>
        <script src="scripts/Items.js"></script>
    </body>
</html>