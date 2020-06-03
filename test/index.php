<?php

require __DIR__. '/../lib_ext/autoload.php';

use Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "secure smtp (tls / ssl)", "port (587)","from@email.com", "From name");

$email->sendEmail("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");