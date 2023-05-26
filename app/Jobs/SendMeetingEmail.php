<?php

namespace App\Jobs;

use App\Mail\MeetingEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;

class SendMeetingEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $meeting;
    public $user;
    public $regionName;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($meeting, $user, $regionName)
    {
        $this->meeting = $meeting;
        $this->user = $user;
        $this->regionName = $regionName;
    }
    

    public function meetingData()
    {
        
        $email = new MeetingEmail();
        $email->date = Carbon::parse($this->meeting->date)->format('j F, Y');
        $email->time = $this->formatTime($this->meeting->time);
        $email->description = $this->meeting->description;
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
        return Mail::to($this->user->email)->send($this->meetingData());
    }
    

    private function formatTime($time)
    {
        $convertTime = date_create($time);
        return date_format($convertTime, "g:i a");
    }
}
