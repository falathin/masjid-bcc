<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAnswer extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $answer;

    public function __construct(Contact $contact, $answer)
    {
        $this->contact = $contact;
        $this->answer = $answer;
    }

    public function build()
    {
        return $this->subject('Jawaban dari Masjid Al-Ikhlas')
                    ->markdown('emails.contact.answer');
    }
}