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

  var ConvertedFileStream;
  var g_recipient;
  var g_subject;
  var g_body;
  var g_attachmentname;
  
  
  function SendMailItem(p_recipient, p_subject, p_body, p_file, p_attachmentname, progressSymbol) {
  
      // Email address of the recipient 
      g_recipient = p_recipient;
  
     // Subject line of an email
      g_subject = p_subject;
  
     // Body description of an email
      g_body = p_body;
  
      // attachments of an email
      g_attachmentname = p_attachmentname;
  
      SendC360Email(g_recipient, g_subject, g_body, g_attachmentname);
  
}