<?php

namespace App\Core\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email extends PHPMailer
{
    private $nome, $template, $subject;

    public function __construct($nome, $template, $subject)
    {
        $this->nome = $nome;
        $this->template = $template;
        $this->subject = $subject;
    }

    public function send()
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = 'smtp.office365.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'victorhugoTI@outlook.com';
            $mail->Password   = 'devnewm2019';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom("victorhugoTI@outlook.com", 'Cadastrado');
            $mail->addAddress("victorhugoTI@outlook.com", $this->nome);


            // Content
            $mail->isHTML(true);
            $mail->Subject = $this->subject;
            $mail->Body    = $this->template;

            $mail->send();
            echo 'Sucesso';
        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}";
        }
    }
}
