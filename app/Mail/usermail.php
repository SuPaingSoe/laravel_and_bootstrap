<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class usermail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $mailcontent;
    // public $infomailcontent;
    public function __construct($mailcontent)
    {
        $this->mailcontent=$mailcontent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.usermail', [
            // 'user'=> $this->user
            'mailcontent'=>$this->mailcontent

        ]);
    }
}
