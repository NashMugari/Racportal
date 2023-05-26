<?php

namespace App\Jobs;

use App\Mail\NewsLetterEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Illuminate\Support\Facades\Mail;

class SendNewsLetterEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $newsLetter;
    public $user;
    public $regionName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($newsLetter, $user, $regionName)
    {
        $this->newsLetter = $newsLetter;
        $this->user = $user;
        $this->regionName = $regionName;
    }

    public function newsLetterData()
    {
        $email = new NewsLetterEmail();
        $email->name = $this->newsLetter->name;
        $email->fileName = $this->newsLetter->file;
        $email->regionName = $this->regionName;

        return $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return Mail::to($this->user->email)->send($this->newsLetterData());
    }
}
