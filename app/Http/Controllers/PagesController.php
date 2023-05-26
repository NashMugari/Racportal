<?php

namespace App\Http\Controllers;

use App\Addresses;
use App\Contact;
use Redirect;
use App\Analytic;
use Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
      public function index()
    {


       $save = new Analytic;
        $save->ipAddress = request()->ip();
        $save->source = 'Website';
        $save->save();   
    //  return 'test';
       return view('welcome');  
    }
    
    public function board_of_trustees()
    {
        return view('layouts.rac_new.board_of_trustees');
    }

    public function meetings_and_events()
    {
        return view('layouts.rac_new.meeting_and_events');
    }

    public function regional_racs()
    {
        $meetings = Addresses::orderBy('id', 'desc')->get();
        return view('layouts.rac_new.regional_racs')->with('meetings', $meetings);
    }

    public function gallery_rac()
    {
        return view('layouts.rac_new.gallery');
    }


    public function cookies()
    {
        return view('layouts.rac_new.cookie');
    }

    public function terms()
    {
        return view('layouts.rac_new.terms');
    }
    
    

    public function contact()
    {
        $sendername = request()->input('sendername');
        $emailaddress  = request()->input('emailaddress');
        $telephone = request()->input('telephone');
        $senderorganisation = request()->input('senderorganisation');
        $sendermessage = request()->input('sendermessage');

        $save = new Contact;

        $save->name = $sendername;
        $save->email = $emailaddress;
        $save->mobile = $telephone;
        $save->employer = $senderorganisation;
        $save->message = $sendermessage;

        $save->save();

        if($save->save() == true)
        {
          Session::flash('message_sent', 'success'); 
        
          return  Redirect::back();
        }
        else
        {
          Session::flash('message_not_sent', 'Error'); 
        
          return  Redirect::back();
        }

      
    }


    public function analytics(){

        $save = new Analytic;
        $save->ipAddress = request()->ip();
        $save->source = 'Rac Website';
        $save->save();

    }




}
