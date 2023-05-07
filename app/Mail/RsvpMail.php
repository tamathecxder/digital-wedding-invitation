<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RsvpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $namaPengirim;
    public $emailPengirim;
    public $pesan;

    /**
     * Create a new message instance.
     */
    public function __construct(
        $namaPengirim,
        $emailPengirim,
        $pesan
    )
    {
        $this->namaPengirim = $namaPengirim;
        $this->emailPengirim = $emailPengirim;
        $this->pesan = $pesan;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ucapan Pernikahan',
            from: new Address($this->emailPengirim, $this->namaPengirim),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.rsvp',
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
