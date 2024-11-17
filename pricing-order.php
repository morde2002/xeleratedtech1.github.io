<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer dependencies
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $websiteType = $_POST['website_type'];
    $additionalSpecifications = $_POST['additional_specifications'];

    // Instantiate PHPMailer
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.titan.email';
    $mail->SMTPAuth = true;
    $mail->Username = 'email@xeleratedtech.com';
    $mail->Password = 'xeleratedtech254.';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->Timeout = 10;

    // Set common email parameters
    $mail->setFrom('email@xeleratedtech.com', $name);
    $mail->addAddress('email@xeleratedtech.com', 'Recipient Name');
    $mail->isHTML(true);
    $mail->Subject = 'Website Order Submission';

    // Customize email content
    $mail->Body = "
        <h1>New Website Order Submission</h1>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Website Type:</strong> $websiteType</p>
        <p><strong>Additional Specifications:</strong> $additionalSpecifications</p>
    ";

    // Send email
    if ($mail->send()) {
        echo '<h3>Thank you for placing your order. We have received your request, and our team will review it shortly. <br>Please allow us some time to assess the details and determine the best approach for your project. You will be contacted by our team for further discussion.<br></h3>';
        echo '<a href="pricing-order-form" class="btn btn-primary">Go Back</a>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "pricing-order-form";
                }, 7000);
              </script>';
    } else {
        echo 'Order could not be placed. Please try again later.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
