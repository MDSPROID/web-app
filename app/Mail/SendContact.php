<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    public $mailData;

    public function __construct($mailData)
    {
        $this->mailData = $mailData;    
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if($this->mailData['thanks'] == ""){
            $thanks = 'Permintaan Anda '.$this->mailData['nomor'];
        }else{
            $thanks = 'Alexander Photo - '.$this->mailData['thanks'];
        }
        return new Envelope(
            from: new Address('mail@alexanderphotostudio.com', 'Alexander Photo'),
            subject: $thanks,
        );
    } 

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.submit_pl',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
