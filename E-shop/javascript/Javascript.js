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
    Email.send({
      Host: "smtp.gmail.com",
      Username: "mikiszotkowski@gmail.com",
      Password: "ahoj@nemr5",
      To: 'mikiszotkowski@gmail.com',
      From: "mikiszotkowski@gmail.com",
      Subject: "Smartcard",
      Body: "Some text",
    })
      .then(function (message) {
        alert("mail sent successfully")
      });
  }