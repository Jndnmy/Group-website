var minimumproduct = 0;
var selected = 0;
var prodlist = [];
function product(Name, Company, Desc, Duration, Type, Experience, Image, Price, Id)
{
    {
        this.Name = Name;
        this.Company = Company;
        this.Desc = Desc;
        this.Duration = Duration;
        this.Type = Type;
        this.Experience = Experience;
        this.Image = Image;
        this.Price = Price;
        this.Id = Id;
    }
}
function search() {

    displayedproduct = 0;
    var valid = true;
    var query = document.getElementById("search").value;
    var duration = document.getElementById("duration").value;
    var type = document.getElementById("type").value;
    var experience = document.getElementById("experience").value;
    prodlist = [];
    document.getElementById("row1").style.display = "none";
    document.getElementById("row2").style.display = "none";
    document.getElementById("row3").style.display = "none";
    document.getElementById("row4").style.display = "none";
    document.getElementById("row5").style.display = "none";
    document.getElementById("row6").style.display = "none";
    document.getElementById("row7").style.display = "none";
    document.getElementById("row8").style.display = "none";
    minimum = parseInt(document.getElementById("productmin").value);
    for (i = 0; i < products.length; i++) {
        valid = true;
        if (query !== "") {
            if (query.length > products[i].Name.length) {
                valid = false;
            }
            if (query.length <= products[i].Name.length) {
                for (j = 0; j < query.length; j++) {
                    if (query[j].toLowerCase() !== products[i].Name[j].toLowerCase()) {
                        valid = false;
                    }
                }
            }
        }
        if (minimumproduct > 0) {
            valid = false;
            minimumproduct = minimumproduct - 1;
        }
        if (duration !== "none") {
            if (products[i].Duration !== duration) {
                valid = false;
            }
        }
        if (type !== "none") {
            if (products[i].Type !== type) {
                valid = false;
            }
        }
        if (experience !== "none") {
            if (products[i].Experience !== experience) {
                valid = false;
            }
        }
        if (minimum <= 0)
        {
            if (displayedproduct < 8) {
                if (valid === true) {
                    added = new product(products[i].Name, products[i].Company,
                            products[i].Desc, products[i].Duration,
                            products[i].Type, products[i].Experience,
                            products[i].Image, products[i].Price,
                            products[i].Id);
                    prodlist.push(added);
                }
            }
            if (displayedproduct < 8) {
                if (valid === true) {
                    displayedproduct = displayedproduct + 1;
                    document.getElementById("row" + displayedproduct).style.display = "block";
                    document.getElementById("Name" + displayedproduct).innerHTML = products[i].Name;
                    document.getElementById("Image" + displayedproduct).src = products[i].Image;
                    document.getElementById("company" + displayedproduct).innerHTML = products[i].Company;
                    document.getElementById("duration" + displayedproduct).innerHTML = products[i].Duration;
                    document.getElementById("type" + displayedproduct).innerHTML = products[i].Type;
                    document.getElementById("experience" + displayedproduct).innerHTML = products[i].Experience;
                    document.getElementById("price" + displayedproduct).innerHTML = products[i].Price;

                }
            }
        }
        minimum = minimum - 1;
    }
}
;
function View1() {

    selected = prodlist[0].Id;
    localStorage.setItem("selected", selected);
}
;
function View2() {
    selected = prodlist[1].Id;
    localStorage.setItem("selected", selected);
}
;
function View3() {
    selected = prodlist[2].Id;
    localStorage.setItem("selected", selected);
}
;
function View4() {
    selected = prodlist[3].Id;
    localStorage.setItem("selected", selected);
}
;
function View5() {
    selected = prodlist[4].Id;
    localStorage.setItem("selected", selected);
}
;
function View6() {
    selected = prodlist[5].Id;
    localStorage.setItem("selected", selected);
}
;
function View7() {
    selected = prodlist[6].Id;
    localStorage.setItem("selected", selected);
}
;
function View8() {
    selected = prodlist[7].Id;
    localStorage.setItem("selected", selected);
}
;
function add() {
    document.getElementById("productmin").value = parseInt(document.getElementById("productmin").value) + 8;
    search();
}
function subtract() {
    if (parseInt(document.getElementById("productmin").value) - 8 >= 0) {
        document.getElementById("productmin").value = parseInt(document.getElementById("productmin").value) - 8;
        search();

    }
}
