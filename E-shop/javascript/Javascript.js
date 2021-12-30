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
    document.getElementById("cena").innerText=price*oneprice;
}

function sendEmail() {
  var jmeno = document.getElementById("jmeno").value;
  var prijmeni = document.getElementById("prijmeni").value;
  var ulice = document.getElementById("ulice").value;
  var PSC = document.getElementById("PSC").value;
  var mesto = document.getElementById("mesto").value;
  var email = document.getElementById("email").value;
  var telefon = document.getElementById("telefon").value;
	Email.send({ 
		Host: "smtp.seznam.cz",
		Username: "smartcard@post.cz",
		Password: "Smartcard123",
		To: 'smartcard@post.cz',
		From: "smartcard@post.cz",
		Subject: "Smartcard",
		Body: "Well that was easy!!"
	}) 
		.then(function (message) { 
		alert("Mail has been sent successfully") 
		});
    Email.send({ 
		Host: "smtp.seznam.cz",s
		Username: "smartcard@post.cz",
		Password: "Smartcard123",
		To: 'smartcard@post.cz',
		From: "smartcard@post.cz",
		Subject: "Smartcard",
		Body: "Well that was easy!!"
	}) 
		.then(function (message) { 
		alert("Mail has been sent successfully") 
		}); 
	}