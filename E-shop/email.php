<?php
    $to = $_POST['email']; 
    $subject = "Smartcard";
    $message = file_get_contents('https://www.smartcard-web.cz/Email.html');
    $message1 = $_POST['jmeno'] . " " . $_POST['prijmeni'] . " " . $_POST['ulice'] . " " . $_POST['PSC'] . " " . $_POST['mesto'] . " " . $_POST['email'] . " " . $_POST['telefon'] . " " . $_POST['pocet'];
    $from = "smartcard@smartcard-web.cz";
    $headers = "From: Smartcard <$from>\n";;
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";


$sent = mail($to, $subject, $message, $headers);
$sent1 = mail("smartcard@post.cz", $subject, $message1, $headers);

if ($sent1) {

?>
<html>
<head>
<title>Thank You</title>
</head>
<body>
<h1>Thank You</h1>
<p>Thank you for your feedback.</p>
</body>
<script language="javascript" type="text/JavaScript">
<!--
setTimeout("location.href = 'https://www.smartcard-web.cz';",1000);
-->
</script>
</html>
<?php

} else {

?><html>
<head>
<title>Something went wrong</title>
</head>
<body>
<h1>Something went wrong</h1>
<p>We could not send your feedback. Please try again.</p>
</body>
</html>
<?php
}
?>