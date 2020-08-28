<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.lead')
        ->subject('Contato Site')
        ->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'phone' => $this->data['phone'],
            'messages' => $this->data['message']
        ]);
    }
}
