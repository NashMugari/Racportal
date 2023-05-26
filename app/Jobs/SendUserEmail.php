<?php

namespace App\Jobs;

use App\Mail\UserEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;

class SendUserEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $contact;
    public $regionName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($contact, $regionName)
    {
        $this->contact = $contact;
        $this->regionName = $regionName;
    }

    public function userData()
    {
        $email = new UserEmail();
        $email->email = $this->contact->email;
        $email->regionName = $this->regionName;
        $email->name = $this->contact->name;
        $email->lastName = $this->contact->lastName;

        return $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Mail::to($this->contact->email)->send($this->userData());
    }
}
