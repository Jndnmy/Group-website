<?php include('php/header.php'); ?>


<head>
    <link rel="stylesheet" href="styles/style.css">
</head>

<br>
<br>
<div class="products-page">

<div class="search-bar">

<input type="text" id="search" placeholder="Search">

<input class="search" type="image" src="images/search-icon.png" onclick="search()"></button>


</div>




<header class="banner" align="center">
<h1> Pentesting tools </h1>
</header>

<?php

		if (isset($_SESSION['userUId'])) {
			echo '<h1 class="loggedin-status" align="center"> Welcome to the members products page ', $_SESSION['userUId'], '</h1>';
			

		} else {
            echo '<p class="login-status" align="center" >You are logged out!</p>';
            
		}

		if (isset($_GET['logout=success'])) {
			echo '<script>alert("Logout was successful")</script>';
		}

		?>



</php>

<div id="checkout" style="display:none" align="center">
<button onclick="tobasket()">
    <- basket </button> <div class=form>
        <div id="nerror"></div><input id="EnName" type="text" name="Name" placeholder="Name">

        <div id="addrerror"></div><input id="EnAddr" type="text" name="Address" placeholder="Address">

        <div id="screrror"></div> <input id="EnScr" type="password" name="Security Number" placeholder="Security number">

        <div id="crderror"></div><input id="EnCrd" type="password" name="Cardnumber" placeholder="Card Number">
        <br>
        <button type="submit" name="signup-submit" onclick="toconfirm()">Confirm</button>
</div>

</div>


<div id="productslist" align="center">
<div class="form">

    <label class="top-options" for="duration">Duration:</label>

    <select id="duration">
                <option value="none">none</option>
                <option value="15m">15m</option>
                <option value="20m">20m</option>
                <option value="25m">25m</option>
                <option value="50m">50m</option>
            </select>
            <label for="type">type:</label>
            <select id="type">
                <option value="none">none</option>
                <option value="Scanning">Scanning</option>
                <option value="Malware">Malware</option>
                <option value="Security Tool">Security Tool</option>
            </select>
            <label for="experience">experience:</label>
            <select id="experience">
                <option value="none">none</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="Expert">Expert</option>
            </select>

    <input class="search" type="image" src="images/search-icon.png" onclick="search()"></button>


</div>
<br>
<style>
table, th, td {
           
            display: inline-block;
        }

</style>
<div class="products-list">
<table class="product-table" id="producttable">
        <colgroup>
            <col span="3">
        </colgroup>
        
        <tr id = "row1" style= "display:none">
            <td id = "Tag1">1</td>
            <td><img id= "Image1" src="" alt="Image1" width="50" height="50"></td>
            <td class="name" id="Name1"></td>
            <td id="company1"></td>
            <td id="duration1"></td>
            <td id="type1"></td>
            <td id="experience1"></td>
            <td id="price1"></td>
            <td id="add1"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View1()"></a></td>
        </tr>

        <tr id = "row2" style= "display:none">
            <td id = "Tag2">2</td>
            <td><img id= "Image2" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name2"></td>
            <td id="company2"></td>
            <td id="duration2"></td>
            <td id="type2"></td>
            <td id="experience2"></td>
            <td id="price2"></td>
            <td id="add2"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View2()"></a></td>  
        </tr>
        <tr id = "row3" style= "display:none">
            <td id = "Tag3">3</td>
            <td><img id= "Image3" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name3"></td>
            <td id="company3"></td>
            <td id="duration3"></td>
            <td id="type3"></td>
            <td id="experience3"></td>
            <td id="price3"></td>
            <td id="add3"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View3()"></a></td>
        </tr >
        <tr id = "row4" style= "display:none">
            <td id = "Tag4">4</td>
            <td><img id= "Image4" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name4"></td>
            <td id="company4"></td>
            <td id="duration4"></td>
            <td id="type4"></td>
            <td id="experience4"></td>   
            <td id="price4"></td>
            <td id="add4"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View4()"></a></td>
        </tr>
        <tr id = "row5" style= "display:none">
            <td id = "Tag5">5</td>
            <td><img id= "Image5" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name5"></td>
            <td id="company5"></td>
            <td id="duration5"></td>
            <td id="type5"></td>
            <td id="experience5"></td>
            <td id="price5"></td>
            <td id="add5"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View5()"></a></td>
        </tr>
        <tr id = "row6" style= "display:none">
            <td id = "Tag6">6</td>
            <td><img id= "Image6" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name6"></td>
            <td id="company6"></td>
            <td id="duration6"></td>
            <td id="type6"></td>
            <td id="experience6"></td>
            <td id="price6"></td>
            <td id="add6"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View6()"></a></td>
        </tr>
        <tr id = "row7" style= "display:none">
            <td id = "Tag7">7</td>
            <td><img id= "Image7" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name7"></td>
            <td id="company7"></td>
            <td id="duration7"></td>
            <td id="type7"></td>
            <td id="experience7"></td>
            <td id="price7"></td>
            <td id="add7"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View7()"></a></td>
        </tr>
        <tr id = "row8" style= "display:none">
            <td id = "Tag8">8</td>
            <td><img id= "Image8" src="" alt="Image1" width="50" height="50"></td>
            <td id="Name8"></td>
            <td id="company8"></td>
            <td id="duration8"></td>
            <td id="type8"></td>
            <td id="experience8"></td>
            <td id="price8"></td>
            <td id="add8"><a href='product.php'><img src="images/arrow3.png" alt="->" width="50" height="50" onclick="View8()"></a></td>
        </tr>
    </table >
    
<div><input type="image" src="images/left-arrow.png" onclick="subtract()" height="12px"></input> <input type="text" id="productmin" value="0"> <input type="image" src="images/right-arrow.png" onclick="add()" height="12px"></input></div>
</div>
<div id="productpage" class="section-defult" style="display:none">
<button onclick="toproducts()">
    <--</button> <div id="productname">
</div>
<img id="productimage" src="" alt="Productimage" width="50" height="50">
<div id="productprice"></div>
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
<button onclick="addtobasket()">Add to basket</button>
</div>

<div id="confirmscreen" style="display:none">
<div id="cardinfo"></div>
<div id="pricefinal"></div>
<button onclick="confirm()">Finalise order</button>
</div>
<div id="confirmed" style="display:none">
Your order has been placed successfully
<Button onclick="toproducts()">Continue shopping</Button>
</div>
<div id="basket" style="display:none">
<Button onclick="toproducts()">
    <--</Button> <Button onclick="tocheckout()">CHECKOUT
</button>
</div>

<script src="scripts/Items.js"></script>
<script src="scripts/Products.js"></script>



</script>

<?php

		if (isset($_SESSION['userUId'])) {
            include_once('stocks.html');

		}

		?>



</php>



</div>