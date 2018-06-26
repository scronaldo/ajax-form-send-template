<?php
$to = 'test@mail.ru';
$subject = 'Заявка';
$message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Телефон: '.$_POST['tel'].'</p>
                    </body>
                </html>';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Отправитель <formfix>\r\n";
mail($to, $subject, $message, $headers);
?>