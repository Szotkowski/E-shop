<?php
    $to = $_POST['email']; 
    $subject = "Smartcard";
    $message = file_get_contents('https://www.smartcard-web.cz/Email.html');
    $message1 = "Jméno: " . $_POST['jmeno'] . "<br />" . "Příjmení: " . $_POST['prijmeni'] . "<br />" . "Ulice a číslo popisné: " . $_POST['ulice'] . "<br />" . "PSČ: " . $_POST['PSC'] . "<br />" . "Město: " . $_POST['mesto'] . "<br />" . "Email: " . $_POST['email'] ."<br />" . "Telefon: " . $_POST['telefon'] ."<br />". "pocet: " . $_POST['price'] . "<br />" . "doprava: " . $_POST['doprava'] . "<br />" . "platba: " . $_POST['platba'];
    $from = "smartcard@smartcard-web.cz";
    $headers = "From: Smartcard <$from>\n";
    $headers  .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$sent = mail($to, $subject, $message, $headers);
$sent1 = mail("smartcard@post.cz", $subject, $message1, $headers);
if ($sent1 && ($_POST['doprava'] == "zasilkovna")) {
?>
<!DOCTYPE html>
<html lang="cs-cz" dir="auto">
<head>
    <meta charset="utf-8">
    <title>
        SmartCard
    </title>
    <link rel="stylesheet" href="https://www.smartcard-web.cz/Style.css" />
    <link rel="shortcut icon" href="https://www.smartcard-web.cz/pictures/hlava.png" type="image/x-icon">
    <meta name="theme-color" content="#31A0A7">
    <meta name="description" content="eshop">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Michael Szotkowski">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>
<body>
    <header>
        <a href="https://www.smartcard-web.cz/index.html">
            <img class="obrazek" src="https://www.smartcard-web.cz/pictures/pro.png" alt="Smartcard">
        </a>
        <br>
        <br>
        <table class="tabulka">
            <tr>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/index.html'">
                        <span class="tr3">
                            Hlavní stránka
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Informace.html'">
                        <span class="tr3">
                            Informace
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Košík.html'">
                        <img src="https://www.smartcard-web.cz/pictures/košík.png" alt="Po kliknutí se přesunete do košíku.">
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
} elseif ($sent1 && ($_POST['doprava'] == "ne")) {
?>
<!DOCTYPE html>
<html lang="cs-cz" dir="auto">
<head>
    <meta charset="utf-8">
    <title>
        SmartCard
    </title>
    <link rel="stylesheet" href="https://www.smartcard-web.cz/Style.css" />
    <link rel="shortcut icon" href="https://www.smartcard-web.cz/pictures/hlava.png" type="image/x-icon">
    <meta name="theme-color" content="#31A0A7">
    <meta name="description" content="eshop">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Michael Szotkowski">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>
<body>
    <header>
        <a href="https://www.smartcard-web.cz/index.html">
            <img class="obrazek" src="https://www.smartcard-web.cz/pictures/pro.png" alt="Smartcard">
        </a>
        <br>
        <br>
        <table class="tabulka">
            <tr>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/index.html'">
                        <span class="tr3">
                            Hlavní stránka
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Informace.html'">
                        <span class="tr3">
                            Informace
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Košík.html'">
                        <img src="https://www.smartcard-web.cz/pictures/košík.png" alt="Po kliknutí se přesunete do košíku.">
                    </button>
                </td>
            </tr>
        </table>
        <br>
        <h1 class="h1">
            Hotovo
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
    <link rel="stylesheet" href="https://www.smartcard-web.cz/Style.css" />
    <link rel="shortcut icon" href="https://www.smartcard-web.cz/pictures/hlava.png" type="image/x-icon">
    <meta name="theme-color" content="#31A0A7">
    <meta name="description" content="eshop">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Michael Szotkowski">
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
</head>
<body>
    <header>
        <a href="https://www.smartcard-web.cz/index.html">
            <img class="obrazek" src="https://www.smartcard-web.cz/pictures/pro.png" alt="Smartcard">
        </a>
        <br>
        <br>
        <table class="tabulka">
            <tr>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/index.html'">
                        <span class="tr3">
                            Hlavní stránka
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Informace.html'">
                        <span class="tr3">
                            Informace
                        </span>
                    </button>
                </td>
                <td>
                    <button class="button" onclick="location.href='https://www.smartcard-web.cz/Košík.html'">
                        <img src="https://www.smartcard-web.cz/pictures/košík.png" alt="Po kliknutí se přesunete do košíku.">
                    </button>
                </td>
            </tr>
        </table>
        <br>
        <h1 class="h1">
            chyba
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