﻿<?php 
session_start();





$fodraszneve = $_SESSION["FodraszNeve"];
$nev =$_SESSION["Nev"];
$telefonszam = $_SESSION["Telefonszam"];
$email = $_SESSION["Email"];
$szolgaltatas = $_SESSION["Szolgaltatas"];
$nap = $_SESSION["Nap"];
$ido = $_SESSION["Ido"];



$targy = "Időpontfoglalás";






$emailformat = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

    <!-- Web Font / @font-face : BEGIN -->
    <!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->
    
    <!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->
    
    <!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
    <!--[if !mso]><!-->
        
    <!--<![endif]-->

    <!-- Web Font / @font-face : END -->
    
    <!-- CSS Reset -->
    <style type="text/css">

        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
      
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>

</head>
<body bgcolor="#222222" width="100%" style="Margin: 0;">
    <center style="width: 100%; background: white;">

      

    
        
        <!-- Email Body : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#c1272f" width="600" style="margin: auto;" class="email-container">
            
            <!-- Hero Image, Flush : BEGIN -->
            <tr>
                <td>
                    <img src="assets\img\logo.png" width="600" height="" alt="Gangsters BarberShop logo" border="0" align="center" style="width: 15%; max-width: 600px;">
                </td>
            </tr>
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td style="padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: white !important;">
                    Köszönjük a foglalását.
                    <br>

                    Fodrasz neve : '.$fodraszneve.'<br>
                    Saját név: '.$nev.'<br>
                    Telefonszám : '.$telefonszam.'<br>
                    Email : '.$email.'<br>
                    Szolgáltatás : '.$szolgaltatas.'<br>
                    Datum: '.$nap.' '.$ido.'<br>


               

                    <br><br>
                    <!-- Button : Begin -->
                    
                    <!-- Button : END -->
                </td>
            </tr>
            <!-- 1 Column Text : BEGIN -->

            
          
        <!-- Email Footer : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: white;">
                    
                    <br><br>
                    <br><span class="mobile-link--footer">Gangsters Barber Shop</span><br><span class="mobile-link--footer">(20) 586 23 44</span>
                    <br><br> 
                    
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

    </center>
</body>
</html>';

require_once('phpmailer/PHPMailerAutoload.php');

$address = $email; //cimzett
$subject = $targy; //tárgy

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; 
$mail->Host = 'smtp.gmail.com'; //saját smtp.gmail.com
$mail->Port = '465';//465
$mail->isHTML();
$mail->Username = 'gangstersbarbershopteszt@gmail.com'; // saját gmail
$mail->Password = 'K447227dmyq'; //saját jelszó
$mail->SetFrom('gangstersbarbershopteszt@gmail.com');
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->Subject = $subject;
$mail->Body = $emailformat;
$mail->AddAddress($address);

$mail->Send();



header("Location: http://localhost/fodrasz/index.php");

 ?>