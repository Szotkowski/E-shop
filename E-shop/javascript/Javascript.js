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

function sendEmail() {
	var jmeno = document.getElementById("jmeno").value;
	var prijmeni = document.getElementById("prijmeni").value;
  	var ulice = document.getElementById("ulice").value;
  	var PSC = document.getElementById("PSC").value;
  	var mesto = document.getElementById("mesto").value;
  	var email = document.getElementById("email").value;
  	var telefon = document.getElementById("telefon").value;
  	if (jmeno != "" && prijmeni != "" && ulice != "" && PSC != "" && mesto != "" && email != "" && telefon != "") {
    	/*Email.send({
    		Host: "smtp.seznam.cz",
			Username: "smartcard@post.cz",
			Password: "Smartcard123",
			To: email,
			From: "smartcard@post.cz",
			Subject: "Smartcard",
			Body: ""
		}).then(alert("s"));
    	/*Email.send({
    		Host: "smtp.seznam.cz",
			Username: "smartcard@post.cz",
			Password: "Smartcard123",
			To: 'smartcard@post.cz',
			From: "smartcard@post.cz",
			Subject: "Smartcard",
			Body: ""
		}).then(location.href='Informace.html')*/
	}
  	else {
	  	window.alert("Chyba");
  	}
}