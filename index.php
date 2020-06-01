<?php

require __DIR__. '/lib_ext/autoload.php';

use Notification\Email;

$nomeEmail = new Email;
$nomeEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de <b>teste II - Nhô Waldir</b>!</p>",
    "waldirfortes@gmail.com",
    "Waldir Developer",
    "waldirfortes@gmail.com",
    "Waldir Enacol");

//var_dump($nomeEmail);