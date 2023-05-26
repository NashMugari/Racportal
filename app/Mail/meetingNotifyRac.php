<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class meetingNotifyRac extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $info;


    public function __construct($info)
    {
		
		//$this->user = $user;
        $this->info = $info;
        
                // 'date'=> $request->date,
                // 'time' => $request->time,
                // 'regionName'=> $regionName
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {
    //     return $this->view('mail.notifyRac'); 

    // }


       public function build()
    {
        return $this->view('mail.meetingNotifyRac')
                    ->with([
                          $info = [
                        'refNo'=> $this->info['refNo'],
                        'title'=> $this->info['title'],
                        'fileName'=> $this->info['fileName'],
                        'description'=> $this->info['description'],
                        'regionName'=>  $this->info['regionName'],
                  ]
                   ])->subject('New Meeting Minute from MWPF RAC');
    }
}
