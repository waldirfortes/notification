<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = 2;                           // Enable verbose debug output
        $this->mail->isSMTP();                                // Send using SMTP
        $this->mail->Host       = 'smtp.gmail.com';           // Set the SMTP server to send through
        $this->mail->SMTPAuth   = 'false';                       // Enable SMTP authentication
        $this->mail->Username   = 'waldirfortes@gmail.com';   // SMTP username
        $this->mail->Password   = 'W@ld1r1978F0rt3s';         // SMTP password
        $this->mail->SMTPSecure = 'ssl';                      // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 465;                        // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $this->mail->CharSet    = 'utf-8';
        $this->mail->setLanguage('pt');
        $this->mail->isHTML(true);

        //Recipients
        $this->mail->setFrom('waldirfortes@gmail.com', 'Developer nhôWaldir');
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