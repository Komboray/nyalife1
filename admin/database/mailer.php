<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";


$mail = new PHPMailer(true);

// this below makes us get the errors in the code such as the pass etc
$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->Port = 587;

$mail->Username  "you@example.com";
$mail->Password = "password";

$mail->isHtml(true);

// $mail->setFrom($email, $name);
// $mail->Body = $message;

// $mail->send();

return $mail;

header("Location: sent.php");
?>