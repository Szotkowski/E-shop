<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'C:\Users\Michael\OneDrive\Documents\phpmailer\PHPMailer-master\src\Exception.php';
    require 'C:\Users\Michael\OneDrive\Documents\phpmailer\PHPMailer-master\src\PHPMailer.php';
    require 'C:\Users\Michael\OneDrive\Documents\phpmailer\PHPMailer-master\src\SMTP.php';

    $email=$_POST['mikiszotkowski@gmail.com'];
    $subject = 'Smartcard';
    $message = '
    <!DOCTYPE html>
    <html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
    
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
        <!--[if !mso]><!-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
        <!--<![endif]-->
        <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                padding: 0;
            }
    
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important;
            }
    
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
            }
    
            p {
                line-height: inherit
            }
    
            @media (max-width:620px) {
                .row-content {
                    width: 100% !important;
                }
    
                .image_block img.big {
                    width: auto !important;
                }
    
                .stack .column {
                    width: 100%;
                    display: block;
                }
            }
        </style>
    </head>
    
    <body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;">
            <tbody>
                <tr>
                    <td>
                        <table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eff8ff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0f80ae; color: #000000; background-image: url("https://d1oco4z2z1fhwp.cloudfront.net/templates/default/5376/Child_with_book-silhouette_bg.png"); background-repeat: no-repeat; width: 600px;" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="column" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 30px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" style="line-height:10px"><a href="https://www.smartcard-web.eu/" target="_blank" style="outline:none" tabindex="-1"><img class="big" src="https://www.smartcard-web.eu/pictures/pro.png" style="display: block; height: auto; border: 0; width: 560px; max-width: 100%;" width="560" alt="Your Logo generic logo" title="Your Logo generic logo"></a></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="padding-bottom:60px;padding-top:55px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: 'Roboto', Tahoma, Verdana, Segoe, sans-serif; font-size: 54px; font-weight: normal; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><a href="https://www.smartcard-web.eu/" target="_blank" title="Smartcard" style="text-decoration: none; color: #ffffff;" rel="noopener"><strong>Smartcard</strong></a><br></h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eff8ff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0f80ae; color: #000000; width: 600px;" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="column" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-left: 20px; padding-right: 20px; padding-top: 0px; padding-bottom: 30px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="padding-bottom:10px;padding-top:20px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: 'Roboto', Tahoma, Verdana, Segoe, sans-serif; font-size: 30px; font-weight: normal; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><strong>Dobrý den,</strong></h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="text_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                            <tr>
                                                                <td style="padding-top:30px;">
                                                                    <div style="font-family: sans-serif">
                                                                        <div style="font-size: 14px; mso-line-height-alt: 21px; color: #ffffff; line-height: 1.5; font-family: Roboto, Tahoma, Verdana, Segoe, sans-serif;">
                                                                            <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 30px;"><span style="font-size:20px;"><strong>děkujeme za Vaši objednávku SmartCard hry.</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="text_block" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
                                                            <tr>
                                                                <td>
                                                                    <div style="font-family: sans-serif">
                                                                        <div style="font-size: 14px; mso-line-height-alt: 16.8px; color: #393d47; line-height: 1.2; font-family: Roboto, Tahoma, Verdana, Segoe, sans-serif;">
                                                                            <p style="margin: 0; font-size: 14px; text-align: center;"><span style="font-size:20px;color:#ffffff;"><strong>O odeslání Vaší objednávky Vás budeme informovat.</strong></span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row row-3" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eff8ff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0f80ae; color: #000000; width: 600px;" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="column" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table class="addon_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" style="line-height:10px"><img src="https://media4.giphy.com/media/PR7zNUghf2Ku3Nbta5/giphy.gif?cid=20eb4e9dyr409tyoeo3ecz56m8qrg4qokae4mlfcfp2gdqs2&rid=giphy.gif&ct=s" style="display: block; height: auto; width: 240px; max-width: 100%;" width="240" alt="Image" title="Image"></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="heading_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="padding-bottom:10px;padding-top:30px;text-align:center;width:100%;">
                                                                    <h1 style="margin: 0; color: #ffffff; direction: ltr; font-family: 'Roboto', Tahoma, Verdana, Segoe, sans-serif; font-size: 24px; font-weight: normal; letter-spacing: normal; line-height: 120%; text-align: center; margin-top: 0; margin-bottom: 0;"><strong>Potřebujete pomoc?</strong></h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row row-4" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eff8ff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0f80ae; color: #000000; width: 600px;" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="column" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <table class="html_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                            <tr>
                                                                <td style="padding-top:20px;">
                                                                    <div style="font-family:Roboto, Tahoma, Verdana, Segoe, sans-serif;text-align:center;" align="center"><center style="font-size: x-large; color: white;">
      <table>
        <tr>
          <td>
          </td>
          <td>
            Instagram:&nbsp;
          </td>
          <td>
            <a href="https://www.instagram.com/_.smartcard._/" target="_blank">
              _.smartcard._
            </a>
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Telefon 1:
          </td>
          <td>
            <a href="tel:730577080">
              730 577 080
            </a>
          </td>
        </tr>
        <tr>
          <td>
          </td>
          <td>
            Telefon 2:
          </td>
          <td>
            <a href="tel:731085724">
              731 085 724
            </a>
          </td>
        </tr>
      </table>
    </center></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="row row-5" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #eff8ff;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #0f80ae; color: #000000; width: 600px;" width="600">
                                            <tbody>
                                                <tr>
                                                    <td class="column" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
                                                        <div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;">&#8202;</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><!-- End -->
    </body>
    
    </html>';
    mail($email, $subject, $message);
?>