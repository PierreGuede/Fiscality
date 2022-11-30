<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendUserCredential extends Mailable
{
    use Queueable, SerializesModels;

    public $username;

    public $email;

    public $password;

    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $username, string $email, string $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user-credentials')->subject(config('app.name').' - '.'Les informations de connetion');
    }
}
