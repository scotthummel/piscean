<?php

namespace App\Scotthummel\Mailers;

use Illuminate\Support\Facades\Mail;

abstract class Mailer {

    public function sendToScott($view, $data, $subject) {
        return Mail::send($view, $data, function($message) use($subject) {
           $message->to('scotthummel@icloud.com', 'Scott Hummel')
               ->subject($subject);
        });
    }
}