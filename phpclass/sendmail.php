<?php
//sending mail in php

$to = "sohankafle33@gmail.com";
$subject = "Test mail";
$message = "Hello, this is a test mail";

mail($to,  $subject, $message);
echo "Mail Sent.";
?>
