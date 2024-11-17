<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.titan.email';
    $mail->SMTPAuth = true;
    $mail->Username = 'email@xeleratedtech.com';
    $mail->Password = 'xeleratedtech254.';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Timeout = 10;
    
    $mail->setFrom($email);
    $mail->addAddress('email@xeleratedtech.com', 'Recipient Name');
    $mail->isHTML(true);
    $mail->Subject = 'Contact Form Submission';
    
    
    $mail->Body = "
        <h1>Contact Details:</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        
        <h1>Message:</h1>
        <p>$message</p>
        
    ";
    if($mail->send()){
           echo 'Test email has been sent successfully.';
       } else {

           $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
       }
} 
?>
