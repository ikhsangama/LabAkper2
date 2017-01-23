<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class userRegistered extends Mailable
{
    use Queueable, SerializesModels;
    public $pengguna;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $pengguna)
    {
        $this->pengguna = $pengguna;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.register');
    }
}
