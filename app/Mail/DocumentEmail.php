<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DocumentEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $referenceNumber;
    public $title;
    public $fileName;
    public $description;
    public $regionName;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject('RAC MINUTES')->markdown('emails.document_rac');
        return $mail;
    }
}
