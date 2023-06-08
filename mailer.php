<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message = '<!DOCTYPE html>
    <html lang="en"> 
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <p> Greetings <strong> ' . $name . '! </strong></p>
        <p>We want to express our sincere appreciation for your feedback. Rest assured, our team has taken note of your comments and suggestions.</p>
        <p>Your input is invaluable to us as we strive to enhance our services and provide the best possible experience for our valued customers like yourself. 
        <br> We are committed to implementing the necessary improvements based on your valuable feedback.</p>
        <p>Wishing you a fantastic day ahead!</p>
        <p>From the JamCris Trading Fam!🚗♥<br>
        <a href="https://jamcristrading.site/">Link back to our website</a></p>
    </body>
    </html>';
    


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->Username = "jamcristrading@gmail.com";
    $mail->Password = "fcmghsauxldifhaw";
    $mail->SMTPSecure = "ssl";
    $mail->Port = "465";

    $mail->setFrom("jamcristrading@gmail.com", "JamCris Trading");
    $mail->addAddress($email); // change to my email
    $mail->isHTML(true);
    $mail->Subject = 'Inquiry/Feedback';
    $mail->Body = $message;

    $mail->send();
    header("Location: response.php");
}
?>