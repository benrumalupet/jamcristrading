<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $subject = $_POST["subject"];

    $message ='<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Greetings <strong> '.$name.'! </strong></p>
        <p>Thank you for your feedback, this is truly noted, Thanks '.$name.'!</p>
        <br><br>
        Have a great day ahead!,<br>
        From Jamcris Trading Fam!<br>
        <strong></b> JamCris Trading ♥</strong>

    </body>
    </html>';


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->Username = "sorrowblade12@gmail.com";
    $mail->Password = "pzauijjiqcgwdkrv";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    $mail->setFrom("sorrowblade12@gmail.com","JamCris Trading");

    $mail->addAddress($email); // change to my email
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    header('location:index.php');
}
?>