function toconfirm() {
    entered = true;
    document.getElementById("nerror").innerHTML = "";
    document.getElementById("addrerror").innerHTML = "";
    document.getElementById("screrror").innerHTML = "";
    document.getElementById("crderror").innerHTML = "";
    if (document.getElementById("EnName").value === "") {
        entered = false;
        document.getElementById("nerror").innerHTML = "ERROR:CANNOT BE EMPTY";
    }
    if (document.getElementById("EnAddr").value === "") {
        entered = false;
        document.getElementById("addrerror").innerHTML = "ERROR:CANNOT BE EMPTY";
    }
    if (document.getElementById("EnScr").value === "") {
        entered = false;
        document.getElementById("screrror").innerHTML = "ERROR:CANNOT BE EMPTY";
    }
    if (document.getElementById("EnCrd").value === "") {
        entered = false;
        document.getElementById("crderror").innerHTML = "ERROR:CANNOT BE EMPTY";

    }
    if (entered === true) {
        resumesession();
        document.getElementById("table-scroll").style.display = "inline";
        document.getElementById("checkout").style.display = "none";
        document.getElementById("confirmscreen").style.display = "inline";
    }
}
;
function confirm() {
    clearbasket();
    document.getElementById("confirmscreen").style.display = "none";
    document.getElementById("table-scroll").style.display = "none";
    document.getElementById("confirmed").style.display = "inline";
}
;
function clearbasket() {
    basketbodylist = [];
    transactionlist = [];
    storedids = [];
    basketbody = "";
    var tabletail = "</table>";
        var tablehead = "<table> <td> <a href='Checkout.php'><img id= " + "images/basketbutton" + " src="
            + "images/basket.png" + " alt=" + "basket" + " width=" + "100" + " height=" + "60"
            + "></a> </td><tr><th>Image</th><th>Name</th><th>Price</th> <td> Cost: <div id=" 
            + "Cost" + ">" + cost + "</div> ";
    document.getElementById("table-scroll").innerHTML = tablehead + basketbody + tabletail;


    cost = 0;
    localStorage.setItem("cost", cost);
    localStorage.setItem("transaction", "[" + transactionlist + "]");
    localStorage.setItem("id", "[" + storedids + "]");
}
;


