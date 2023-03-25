<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;
    protected $username;
    protected $useremail;
    protected $usertext;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username, $useremail,$usertext)
    {
        $this->username = $username;
        $this->useremail = $useremail;
        $this->usertext = $usertext;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail')->with([
            'username'=> $this -> username,
            'useremail'=> $this -> useremail,
            'usertext'=> $this -> usertext,
        ])->subject('Обратная связь');
    }
}
