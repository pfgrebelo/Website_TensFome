<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(empty($_GET['form-from']) || empty($_GET['form-message'])){
    header('Location:../index.php?p=contact&r=empty');
    exit();
}

$from = $_GET['form-from'];
$message = $_GET['form-message'];
$name = $_GET['form-name'];
$subject = $_GET['form-subject'];

try {
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
        );
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp_host';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'smtp_username';                     //SMTP username
    $mail->Password   = 'smtp_password';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 'port';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('mail', 'Admin');
    $mail->addAddress('mail', $from);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = 'De: '.$name.'<br>Email: '.$from.'<br>Message: '.$message;
    $mail->AltBody = 'De: '.$name.';Email: '.$from.';Message: '.$message;

    $mail->send();

    header('Location:index.php?p=contacto&r=ok');

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    //header('Location:index.php?p=contacto&r=error');
}