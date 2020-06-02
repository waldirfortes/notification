<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;

    public function __construct($smtpDebug, $host, $user, $pass, $smtpSecure, $port, $setFromEmail, $setFromName)
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;       // Enable verbose debug output
        $this->mail->isSMTP();                     // Send using SMTP
        $this->mail->Host       = $host;           // Set the SMTP server to send through
        $this->mail->SMTPAuth   = 'false';         // Enable SMTP authentication
        $this->mail->Username   = $user;           // SMTP username
        $this->mail->Password   = $pass;           // SMTP password
        $this->mail->SMTPSecure = $smtpSecure;     // (ssl) Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = $port;           // (465) TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $this->mail->CharSet    = 'utf-8';
        $this->mail->setLanguage('pt');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom($setFromEmail, $setFromName);
    }

    public function sendMail($subject, $body, $replayEmail, $replayName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;

        $this->mail->addReplyTo($replayEmail, $replayName);
        $this->mail->addAddress($addressEmail, $addressName);

        try{
            $this->mail->send();
        }catch (Exception $e){
            echo "Erro ao enviar o e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }

    }
}