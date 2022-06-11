<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$email. "<" .$email. ">\r\n";

$recipient = "support@occidentaltravelhouse.co.ke";
mail($recipient, $subject, $message, $mailheader);
echo("Message sent")

?>