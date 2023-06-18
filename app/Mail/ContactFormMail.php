<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Message;
use App\Models\Category;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public $formData;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('Contact Aanvraag - '. $this->data['subject'])
                    ->view('emails.contact-submission', ['data' => $this->data]);
    }
}
