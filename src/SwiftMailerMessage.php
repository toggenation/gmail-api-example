<?php

namespace Toggenation\GmailApiExample;

use Swift_Image;
use Swift_Message;

class SwiftMailerMessage
{
    public static function create()
    {
        define('IMAGES', realpath(__DIR__ . '/../images') . '/');


        $message = new Swift_Message();
        $cid = $message->embed(Swift_Image::fromPath(IMAGES . 'Smiley.png'));

        $message->setSubject("My Fantastic Subject")
            ->setFrom(['toggen.yt@gmail.com' => 'James McDonald'])
            ->setTo(['toggen.yt@gmail.com' => 'James McDonald'])
            ->setBody('Here is the <strong>message</strong> itself<p>'
                . '<img style="height: 100px; width: auto;" src="' . $cid . '">', 'text/html');

        return $message->toString();
    }
}
