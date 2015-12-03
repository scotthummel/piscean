<?php

namespace App\Scotthummel\Mailers;

class ContactMailer extends Mailer {
    public function contact($user) {
        $user = (object) $user;

        $subject = 'Message from '.  $user->name . ', Piscean';
        $view = 'emails.general.contact';
        $data = [
            'subject' => $subject,
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'comments' => $user->comments
        ];

        return $this->sendToScott($view, $data, $subject);
    }
}