var product = 0;
function loadproduct() {
    resumesession();
 product = localStorage.getItem("selected") -1;
    document.getElementById("productname").innerHTML = products[product].Name;
    document.getElementById("productimage").src = products[product].Image;
    document.getElementById("productprice").innerHTML = products[product].Price;
    document.getElementById("productdesc").innerHTML = products[product].Desc;
    document.getElementById("productname2").innerHTML = products[product].Name;
    document.getElementById("productcompany").innerHTML = products[product].Company;
    document.getElementById("productdesc2").innerHTML = products[product].Desc;
    document.getElementById("productduration").innerHTML = products[product].Duration;
    document.getElementById("producttype").innerHTML = products[product].Type;
    document.getElementById("productdif").innerHTML = products[product].Experience;
    document.getElementById("productprice2").innerHTML = products[product].Price;
}