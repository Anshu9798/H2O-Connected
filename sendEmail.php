<?php

// TODO debug messages -- remove these later
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = $_POST['fname'];
$phonenumber = $_POST['phonenumber'];
$question = $_POST['question'];
$email = $_POST['email'];

$to = "ernie.howard@h2oconnected.com";
$subject = "H2O Connected Contact Form";
$message = "Name: " . $name . "\nPhone Number: " . $phonenumber . "\nMessage: " . $question;

// metadata for email
$headers =  "From: " . $email . "\r\n" .
            "Reply-To: " . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

// send response back to frontend
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Could not send email.";
}

?>