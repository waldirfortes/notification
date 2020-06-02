<?php

require __DIR__. '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(
    2,
    "smtp.gmail.com",
    "waldirfortestest@gmail.com",
    "test@123",
    "ssl",
    465,
    "waldirfortestest@gmail.com",
    "Equipa WFSoluction" );

$novoEmail->sendMail(
    "Assunto de Teste",
    "<p>Esse é um e-mail de <b>teste II - Nhô Waldir</b>!</p>",
    "waldirfortestest@gmail.com",
    "Waldir Developer",
    "waldirfortestest@gmail.com",
    "Waldir Enacol");

//var_dump($nomeEmail);