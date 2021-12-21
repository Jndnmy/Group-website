var prodlist = [];
var basketbody = "";
var basketbodylist = [];
var cost = 0;
var transactionlist = [];
var storedids = [];
function resumesession() {
    if (typeof (Storage) !== "undefined") {
        if (localStorage.getItem("cost") !== null && localStorage.getItem("transaction") !== null && localStorage.getItem("id") !== null) {

            cost = localStorage.getItem("cost");
            var recieveddata = localStorage.getItem("transaction");
            transactionlist = JSON.parse(recieveddata);
            recieveddata = localStorage.getItem("id");
            storedids = JSON.parse(recieveddata);
            generatebasket();

        }
    }
}
;
function generatebasket() {
    var tabletail = "</table>";
    var tablehead = "<table> <td> <a href='Checkout.php'><img id= " + "basketbutton" + " src="
            + "images/basket.png" + " alt=" + "basket" + " width=" + "100" + " height=" + "60"
            + "></a> </td><tr><th>Image</th><th>Name</th><th>Price</th> <td> Cost: <div id="
            + "Cost" + ">" + cost + "</div> ";
    basketbody = "";
    var tableadd = "";
    for (z = 0; z < storedids.length; z++) {
        if (storedids[z] !== 9999) {
            tableadd = "<tr><td>" + "<img src=" + products[storedids[z]].Image +
                    " alt=" + "Image" + " width=" + "50" + " height=" + "50" +
                    "> </td> <td>" + products[storedids[z]].Name +
                    "</td> <td>" + products[storedids[z]].Price + "</td></tr>" +
                    "<td> <button id=" + "button" + basketbodylist.length +
                    ">X</button> </td>";
            basketbodylist.push(tableadd);
        } else {
            basketbodylist.push("");
        }
    }

    for (i = 0; i < basketbodylist.length; i++) {
        basketbody = basketbody + basketbodylist[i];
    }
    document.getElementById("table-scroll").innerHTML = tablehead + basketbody + tabletail;

    for (i = 0; i < basketbodylist.length; i++) {
        try {
            if (basketbody[i] !== "") {
                document.getElementById("button" + i).addEventListener("click", remove);
            }
        } catch (err) {

        }

    }

}
;

function remove(e) {
    basketbody = "";
    var id = "";
    var id = e.target.id;
    var button = "";
    var buttonint = 0;
    for (k = 6; k < id.length; k++) {
        button = button + id[k];
    }
    buttonint = parseInt(button);
    basketbodylist[buttonint] = "";
    storedids[buttonint] = 9999;
    cost = parseInt(cost) - parseInt(transactionlist[buttonint]);
    var tabletail = "</table>";
    var tablehead = "<table> <td> <a href='Checkout.php'><img id= " + "basketbutton" + " src="
            + "images/basket.png" + " alt=" + "basket" + " width=" + "100" + " height=" + "60"
            + "></a> </td><tr><th>Image</th><th>Name</th><th>Price</th> <td> Cost: <div id="
            + "Cost" + ">" + cost + "</div> ";
    for (i = 0; i < basketbodylist.length; i++) {
        basketbody = basketbody + basketbodylist[i];
    }
    document.getElementById("table-scroll").innerHTML = tablehead + basketbody + tabletail;

    for (i = 0; i < basketbodylist.length; i++) {
        try {
            if (basketbody[i] !== "") {
                document.getElementById("button" + i).addEventListener("click", remove);
            }
        } catch (err) {

        }

    }



    localStorage.setItem("cost", cost);
    localStorage.setItem("transaction", "[" + transactionlist + "]");
    localStorage.setItem("id", "[" + storedids + "]");
}
function addtobasket() {
    basketbody = "";
    cost = parseInt(cost) + parseInt(products[product].Price);
    transactionlist.push(products[product].Price);
    var tablehead = "<table> <td> <a href='Checkout.php'><img id= " + "basketbutton" + " src="
            + "images/basket.png" + " alt=" + "basket" + " width=" + "100" + " height=" + "60"
            + "></a> </td><tr><th>Image</th><th>Name</th><th>Price</th> <td> Cost: <div id="
            + "Cost" + ">" + cost + "</div> ";
    var tableadd = "<tr><td>" + "<img src=" + products[product].Image +
            " alt=" + "Image" + " width=" + "50" + " height=" + "50" +
            "> </td> <td>" + products[product].Name +
            "</td> <td>" + products[product].Price + "</td></tr>" +
            "<td> <button id=" + "button" + basketbodylist.length +
            ">X</button> </td>";
    basketbodylist.push(tableadd);
    storedids.push(products[product].Id-1);
    var tabletail = "</table>";
    for (i = 0; i < basketbodylist.length; i++) {
        basketbody = basketbody + basketbodylist[i];
    }
    document.getElementById("table-scroll").innerHTML = tablehead + basketbody + tabletail;
    for (i = 0; i < basketbodylist.length; i++) {
        try {
            if (basketbody[i] !== "") {

                document.getElementById("button" + i).addEventListener("click", remove);


            }
        } catch (err) {
        }

    }

    localStorage.setItem("cost", cost);
    localStorage.setItem("transaction", "[" + transactionlist + "]");
    localStorage.setItem("id", "[" + storedids + "]");
}