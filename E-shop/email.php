<?php
    $to = $_POST['email']; 
    $subject = "Smartcard";
    $message = file_get_contents('https://www.smartcard-web.cz/Email.html');
    $message1 = "Jméno: " . $_POST['jmeno'] . "<br />" . "Příjmení: " . $_POST['prijmeni'] . "<br />" . "Ulice a číslo popisné: " . $_POST['ulice'] . "<br />" . "PSČ: " . $_POST['PSC'] . "<br />" . "Město: " . $_POST['mesto'] . "<br />" . "Email: " . $_POST['email'] ."<br />" . "Telefon: " . $_POST['telefon'] ."<br />". "pocet: " . $_POST['price'];
    $from = "smartcard@smartcard-web.cz";
    $headers = "From: Smartcard <$from>\n";;
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$sent = mail($to, $subject, $message, $headers);
$sent1 = mail("smartcard@post.cz", $subject, $message1, $headers);
if ($sent1) {
?>
<!DOCTYPE html>
<html lang="cs-cz" dir="auto">
<head>
    <meta charset="utf-8">
    <title>
        SmartCard
    </title>
    <link rel="stylesheet" href="Style.css" />
    <link rel="shortcut icon" href="pictures/Hlava.png" type="image/x-icon">
    <link rel="icon" href="pictures/Hlava.png" type="image/x-icon">
    <meta name="theme-color" content="#31A0A7">
    <meta name="description" content="eshop">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Michael Szotkowski">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>
<body>
    <header>
        <a href="index.html">
            <img class="obrazek" src="pictures/pro.png" alt="Smartcard">
        </a>
        <br>
        <br>
        <table class="tabulka">
            <tr>
                <td>
                    <button class="button" onclick="location.href='index.html'">
                        <span class="tr3">
                            Hlavní stránka
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='Informace.html'">
                        <span class="tr3">
                            Informace
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='Košík.html'">
                        <img src="pictures/košík.png" alt="Po kliknutí se přesunete do košíku.">
                    </button>
                </td>
            </tr>
        </table>
        <br>
        <h1 class="h1">
            Email byl úspěšně odeslán
        </h1>
    </header>
    <script language="javascript" type="text/JavaScript">
    <!--
    setTimeout("location.href = 'https://www.smartcard-web.cz';",1000);
    -->
    </script>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="cs-cz" dir="auto">
<head>
    <meta charset="utf-8">
    <title>
        SmartCard
    </title>
    <link rel="stylesheet" href="Style.css" />
    <link rel="shortcut icon" href="pictures/Hlava.png" type="image/x-icon">
    <link rel="icon" href="pictures/Hlava.png" type="image/x-icon">
    <meta name="theme-color" content="#31A0A7">
    <meta name="description" content="eshop">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Michael Szotkowski">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>
<body>
    <header>
        <a href="index.html">
            <img class="obrazek" src="pictures/pro.png" alt="Smartcard">
        </a>
        <br>
        <br>
        <table class="tabulka">
            <tr>
                <td>
                    <button class="button" onclick="location.href='index.html'">
                        <span class="tr3">
                            Hlavní stránka
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='Informace.html'">
                        <span class="tr3">
                            Informace
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='Košík.html'">
                        <img src="pictures/košík.png" alt="Po kliknutí se přesunete do košíku.">
                    </button>
                </td>
            </tr>
        </table>
        <br>
        <h1 class="h1">
            Chyba
        </h1>
    </header>
    <script language="javascript" type="text/JavaScript">
    <!--
    setTimeout("location.href = 'https://www.smartcard-web.cz/Formulář.html';",1000);
    -->
    </script>
</body>
</html>
<?php
}
?>