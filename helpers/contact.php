<?php

$result = 'ok';

if(trim($_POST['mini-email']) === '') {
  $result = 'Error - falta el campo email';
}else{
  $email = trim($_POST['mini-email']);
}
if(trim($_POST['mini-comments']) === '') {
  $result = 'Error - falta el campo comentarios';
}else{
  $comments = trim($_POST['mini-comments']);
}

if($result=='ok'){
    $emailTo = 'epalma@showdreamscr.com';
    $subject = 'showdreamscr.com - Submitted message from '.$email;
    $body = "Email: $email \n\nComments: $comments";
    $headers = 'From: ' .' <info@showdreamscr.com>' . "\r\n" . 'Reply-To: ' . $email;

    mail($emailTo, $subject, $body, $headers);



}

echo $result;
