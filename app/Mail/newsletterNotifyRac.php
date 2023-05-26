<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class newsletterNotifyRac extends Mailable
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
        return $this->view('mail.newsletterNotifyRac')
                    ->with([
                          $info = [
                        'name'=> $this->info['name'],
                        'fileName'=> $this->info['fileName'],
                        'regionName'=>  $this->info['regionName'],
                  ]
                   ])->subject('Newsletter Uploaded from MWPF RAC');
    }
}
