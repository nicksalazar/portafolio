<?php
define('RECIPIENT', 'nicksalazarpinto1999@gmail.com');


$name        = $_POST['name'];
$email        = $_POST['email'];
$message    = $_POST['form-message'];


$body        = $message . "\n\n";
$body        .= $name . "<$email>" . " Esto se envio desde mi portafolio github";
$headers    = "From: $name<$email>";


if (mail(RECIPIENT, $headers, $body)) {
    echo 'success';
} else {
    echo 'fail';
}
