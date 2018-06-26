<?php
// Check for empty fields


$phone = strip_tags($_POST['tel']);

// Create the email and send the message
$to = 'pavelfridmanjr@mail.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Новая заявка";
$email_body = "С сайта поступила новая заявка, надо бы глянуть.\r\n\r\n" . "Данные клиента:\r\n\r\n Имя: $name\r\n\r\n Номер телефона: $phone\r\n\r\n Емайл: $email";
$headers = "From: noreply@" . $_SERVER['SERVER_NAME'] . "\r\n";
$headers .= "Reply-To: $email_address";
mail($to, $email_subject, $email_body, $headers);