<?php

namespace Toggenation\GmailApiExample;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMailerMessage
{
    public function create()
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        define('IMAGES', realpath(__DIR__ . '/../images') . '/');

        try {

            //Recipients
            //James McDonald <toggen.yt@gmail.com>
            $mail->setFrom('toggen.yt@gmail.com', 'James McDonald');
            $mail->addAddress('toggen.yt@gmail.com', 'James McDonald');     //Add a recipient
            //Attachments
            $mail->addEmbeddedImage(IMAGES . 'Smiley.png', 'smiley');         //Add attachments

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b><p>
            <img style="height: 100px; width: auto;" src="cid:smiley"></p>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->preSend();

            return $mail->getSentMIMEMessage();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
