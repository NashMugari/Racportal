<?php

namespace App\Jobs;

use App\Mail\DocumentEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;


class SendDocumentEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $document;
    public $user;
    public $regionName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($document, $user, $regionName)
    {
        $this->document = $document;
        $this->user = $user;
        $this->regionName = $regionName;
    }


    public function documentData()
    {
        $email = new DocumentEmail();
        $email->referenceNumber = $this->document->refNo;
        $email->title = $this->document->name;
        $email->fileName = $this->document->file;
        $email->description = $this->document->description;
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
        return Mail::to($this->user->email)->send($this->documentData());
    }
}
