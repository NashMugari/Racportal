<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class notifyRac extends Mailable
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
        return $this->view('mail.notifyRac')
                    ->with([
                          $info = [
                        'date'=> $this->info['date'],
                        'time' =>  $this->info['time'],
                        'regionName'=>  $this->info['regionName'],
                              'description'=>  $this->info['description'],
                  ]
                   ])->subject('New Task from MWPF RAC');
    }
}
