<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$number = $_POST['num'];
$message = $_POST['mess'];
$to = 'cmprivresthouse@gmail.com';
$subject = 'from CM-Web';
$headers = "From: $email";

mail($to, $subject, $message, $headers);
echo "<script>alert('Thank you for your submission!'); window.location.href = 'https://cmprivateresthouse.000webhostapp.com/CM%20Private%20Rest%20House/';</script>";
?>