<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: [".$name."]\n\n"."Message:\n".$message.".";
$recipient = "info@unimarkbd.com";
$mailheader = "From: $email \r\n";

if(mail($recipient, $subject, $formcontent, $mailheader))
{
    header("Location: contact.php?success=1");
    // print_r($_POST);
}
else
    header("Location: contact.php?error=1");
?>