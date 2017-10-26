<?php

namespace notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail;

    public function __construct($SmtpDebug,$Host,$User,$Pass,$SmtpSecure,$port,$RemEmail,$RemNome) {

        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = $SmtpDebug;                                 // Enable verbose debug output
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = $Host;  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = $User;                 // SMTP username
        $this->mail->Password = $Pass;                           // SMTP password
        $this->mail->SMTPSecure = $SmtpSecure;                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = $port;                                    // TCP port to connect to
        $this->mail->CharSet = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(TRUE);
        $this->mail->setFrom($RemEmail, $RemNome);
    }

    public function sendmail($assunto, $mensagem,  $reme_email, $reme_name ,$destina_email, $destina_name) {
        $this->mail->Subject = (string) $assunto;
        $this->mail->Body = $mensagem;

        $this->mail->addReplyTo($reme_email, $reme_name);
        $this->mail->addAddress($destina_email, $destina_name);

        try {
            $this->mail->send();
        } catch (Exception $e) {

            echo "Mailer Error:  { $this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }

}
