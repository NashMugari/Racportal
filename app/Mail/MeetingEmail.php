<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MeetingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $date;
    public $time;
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
        $mail= $this->subject('RAC meeting')->markdown('emails.meeting_rac');
        return $mail;
    }
}
