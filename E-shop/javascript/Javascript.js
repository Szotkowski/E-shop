const oneprice = 250;
function Kosik() {
    var count = document.getElementById("pocet").value;
    sessionStorage.setItem("count", count);
}

function Kosik1() {
    var newcount = sessionStorage.getItem("count");
    document.getElementById("pocet").setAttribute("value", newcount);
    var count1 = document.getElementById("pocet").value;
    sessionStorage.setItem("count1", count1);
}

function Cena() {
    var price = sessionStorage.getItem("count1");
    document.getElementById("cena").innerText=price*oneprice+" Kč";
	sessionStorage.setItem("price", price);
}

function Cena1() {
	if (sessionStorage.getItem("price") > 0) {
		location.href='Formulář.html';
	}
}