<?php

namespace Toggenation\GmailApiExample;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

define('IMAGES', __DIR__ . '/../images/');

class Email
{

    public static function create()
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $mail->setFrom('toggen.yt@gmail.com', 'Toggen Youtube');
            $mail->addAddress('toggen.yt@gmail.com', 'From Toggen User');     //Add a recipient
            $mail->AddEmbeddedImage(IMAGES . 'smiley.jpg', 'smiley');         //Add attachments
            $mail->addAttachment(IMAGES . 'smiley.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b><br><img src="cid:smiley">';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->preSend();

            return $mail->getSentMIMEMessage();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
