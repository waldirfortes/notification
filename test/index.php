<?php

require __DIR__. '/../lib_ext/autoload.php';

use Notification\Email;

$nomeEmail = new Email(
    2,
    "smtp.gmail.com",
    "waldirfortes@gmail.com",
    "test@123",
    "ssl",
    465,
    "waldirfortes@gmail.com",
    "Equipa WFSoluction" );

$nomeEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de <b>teste II - Nhô Waldir</b>!</p>",
    "waldirfortes@gmail.com",
    "Waldir Developer",
    "waldirfortes@gmail.com",
    "Waldir Enacol");

//var_dump($nomeEmail);