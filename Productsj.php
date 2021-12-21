<?php include ('php/header.php');?>
<head>
    <style>
        p {font-family: arial; text-align: 
               center;}
        a {font-family: arial; text-align: 
               left;background-color: Grey; color: white;}
        #crderror {font-family: arial; text-align: 
               left;background-color: Grey; color: red;}
        #addrerror {font-family: arial; text-align: 
               left;background-color: Grey; color: red;}
        #nerror {font-family: arial; text-align: 
               left;background-color: Grey; color: red;}
        #screrror {font-family: arial; text-align: 
               left;background-color: Grey; color: red;}
        table, th, td {
            border: 1px solid black;
            display: inline-block;
        }
        #table-scroll {
            height:600px;
            overflow:auto;  
            margin-top:20px;
        }
    </style>
</head>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div id = "productslist" style = "display:inline">
        <div class ="form">

            <label for="duration">duration:</label>

            <select id="duration">
                <option value="none">none</option>
                <option value="<6m"><6m</option>
                <option value="12m">12m</option>
                <option value="24m">24m</option>
                <option value=">24m">>24m</option>
            </select>
            <label for="type">type:</label>
            <select id="type">
                <option value="none">none</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value=">D">D</option>
            </select>
            <label for="experience">experience:</label>
            <select id="experience">
                <option value="none">none</option>
                <option value="Low">Low</option>
                <option value="Mid">Mid</option>
                <option value="Pro">Pro</option>
            </select>

            <div>
                Search:<input type="text" id ="search">
                <button type="submit" onclick="search()">-></button>

            </div>
        </div>
        <br> 
        <div>Products </div>
        <table id="producttable" style="width: 80%; display: block">
            <tr style="display: block">
                <th>&nbsp;</th>
                <th>Image</th>
                <th>Name</th>
                <th>Company</th>
                <th>Duration</th>  
                <th>Type</th>
                <th>Experience</th>
                <th>Price</th>
                <th>View</th>
            </tr >
            <tr id = "row1" style= "display:none">
                <td id = "Tag1">1</td>
                <td><img id= "Image1" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name1"></td>
                <td id="company1"></td>
                <td id="duration1"></td>
                <td id="type1"></td>
                <td id="experience1"></td>
                <td id="price1"></td>
                <td id="add1"><button onclick="View1()">Add a</button></td>
            </tr>

            <tr id = "row2" style= "display:none">
                <td id = "Tag2">2</td>
                <td><img id= "Image2" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name2"></td>
                <td id="company2"></td>
                <td id="duration2"></td>
                <td id="type2"></td>
                <td id="experience2"></td>
                <td id="price2"></td>
                <td id="add2"><button onclick="View2()">Add a</button></td>  
            </tr>
            <tr id = "row3" style= "display:none">
                <td id = "Tag3">3</td>
                <td><img id= "Image3" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name3"></td>
                <td id="company3"></td>
                <td id="duration3"></td>
                <td id="type3"></td>
                <td id="experience3"></td>
                <td id="price3"></td>
                <td id="add3"><button onclick="View3()">Add a</button></td>
            </tr >
            <tr id = "row4" style= "display:none">
                <td id = "Tag4">4</td>
                <td><img id= "Image4" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name4"></td>
                <td id="company4"></td>
                <td id="duration4"></td>
                <td id="type4"></td>
                <td id="experience4"></td>   
                <td id="price4"></td>
                <td id="add4"><button onclick="View4()">Add a</button></td>
            </tr>
            <tr id = "row5" style= "display:none">
                <td id = "Tag5">5</td>
                <td><img id= "Image5" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name5"></td>
                <td id="company5"></td>
                <td id="duration5"></td>
                <td id="type5"></td>
                <td id="experience5"></td>
                <td id="price5"></td>
                <td id="add5"><button onclick="View5()">Add a</button></td>
            </tr>
            <tr id = "row6" style= "display:none">
                <td id = "Tag6">6</td>
                <td><img id= "Image6" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name6"></td>
                <td id="company6"></td>
                <td id="duration6"></td>
                <td id="type6"></td>
                <td id="experience6"></td>
                <td id="price6"></td>
                <td id="add6"><button onclick="View6()">Add a</button></td>
            </tr>
            <tr id = "row7" style= "display:none">
                <td id = "Tag7">7</td>
                <td><img id= "Image7" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name7"></td>
                <td id="company7"></td>
                <td id="duration7"></td>
                <td id="type7"></td>
                <td id="experience7"></td>
                <td id="price7"></td>
                <td id="add7"><button onclick="View7()">Add a</button></td>
            </tr>
            <tr id = "row8" style= "display:none">
                <td id = "Tag8">8</td>
                <td><img id= "Image8" src="" alt="Image1" width="100" height="60"></td>
                <td id="Name8"></td>
                <td id="company8"></td>
                <td id="duration8"></td>
                <td id="type8"></td>
                <td id="experience8"></td>
                <td id="price8"></td>
                <td id="add8"><button onclick="View8()">Add a</button></td>
            </tr>
        </table >
        <div><button onclick="subtract()"><-</button>
            <input type="text" id="productmin" value="0"><button onclick="add()">-></button></div>
    </div>
    <div id="productpage" class="section-defult" style="display:none">
        <button onclick="toproducts()"><--</button>
        <div id="productname"></div>
        <img id= "productimage" src="" alt="Productimage" width="100" height="60">
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
    <div id="checkout" style="display:none">
        <button onclick="tobasket()"><- basket </button>  
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
        <Button onclick="toproducts()">Continue shopping</Button>
    </div>
    <div id="basket" style="display:none">
        <Button onclick="toproducts()"><--</Button> <Button onclick="tocheckout()">CHECKOUT</button>
    </div>
    <div id="table-scroll" align="right">
        <table>
            <td> <button type="submit" onclick="tobasket()">BASKET</button> </td>
            <td> Cost: <div id="Cost">0</div> 
            <tr><th>Image</th><th>Name</th><th>Price</th><th>X</th>
        </table>
    </div>



    <script src="Products.js">

    </script>
</body>


</html>