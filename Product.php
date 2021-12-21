<?php include('php/header.php'); ?>

<html>


<head>
    <meta charset="utf-8">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--says edge of website should follow edge of device, initial scale means the site should scale the content -->
    
</head>
<br>
<br>
<br>
<a href='products.php'><img src="images/2arrow.png" alt="back" width="30" height="20"></a>
<div id="table-scroll" align="right">
        <table>
            <td> <button type="submit" onclick="tobasket()">BASKET</button> </td>
            <td> Cost: <div id="Cost">0</div>
                <tr>
                    <th width="50px" height="50px" >Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>X</th>
        </table>
    </div>

<body onload="loadproduct()">

<style>
#table-scroll {
	height:300px;
	overflow:auto;
	margin-top:20px;
}

</style>



    <div id="productpage">
        
        <div class="product-page-table" align="center">


            
               <h1> <div id="productname"></div> </h1>
            


            <img id="productimage" src="" alt="Productimage" width="50" height="50">
            <div id="productprice" display="hidden"> </div>
            <div id="productdesc"></div>

            <table id="productpagetable">
                <tr>
                    <td>Name:</td>
                    <td id="productname2">
                </tr>
                <tr>
                    <td>Company:</td>
                    <td id="productcompany"></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td id="productdesc2"></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td id="productduration"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td id="producttype"></td>
                </tr>
                <tr>
                    <td>Experience:</td>
                    <td id="productdif"></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td id="productprice2"></td>
                </tr>
            </table>
            <br>
            <input type="image" src="images/add-basket.png" onclick="addtobasket()" height="40px"></input>

        </div>
    </div>
    <br>
    <br>
    <br>
    
    <script src="scripts/Basket.js"></script>
    <script src="scripts/Product.js"></script>
    <script src="scripts/Items.js"></script>
</body>

</html>