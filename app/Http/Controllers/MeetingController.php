<?php

namespace App\Http\Controllers;

use App\api\mail_api\TestMail;
use App\Mail\notifyRac;
use App\Meeting;
use App\Region;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Jobs\SendMeetingEmail;
use Carbon\Carbon;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::all();
        return response()->json($meetings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $meeting = Meeting::create($request->validate([
            'date' => 'required',
            'time' => 'required',
            'description' => 'required',
            'region_id' => 'required',
        ]));

        $getRegionName = DB::table('regions')->where('id', $request->all()['region_id'])->first();

        $info = [
            'date' => $request->all()['date'],
            'time' => $request->all()['time'],
            'description' => $request->all()['description'],
            'regionName' => $getRegionName->name,
        ];

        // $info = json_encode($post);

        // Send Rac Info to the Members

        // Get Region's name

        //  dd($request->all()['date']);

        // $user = Auth::user();

        // dd(auth()->user()['id']);

        $users = User::all();

        $regionUsers = DB::table('users')
            ->where('region_id', '=', $request->all()['region_id'])->get();

        //dd($regionUsers);
        //exit();

        $contactList = [];

        $i = 0;
        if ($request->region_id == 10) {

            // Send Rac notification to all the users
            foreach ($users as $user) {

                $contactList[$i] = $user->email;
                $i++;
            }

            //  $contactList = array(); //associative array

            // $simple_array = array(); //simple array

            // foreach ($contactList as $d) {
            //     $simple_array[] = $d['email'];
            // }

            // return $simple_array;

            // return $contactList;

            //$emails = array('reagan@ecowebplus.com', 'support@ecowebplus.com');

            foreach ($contactList as $email) {

                $this->testHttp($email, $info);

            }

            // foreach ($users as $user) {
            //     Mail::to($user->email)->send(new notifyRac($info));
            // }

        } else {
            // Send Rac Notification to region users only
            // foreach ($regionUsers as $user) {
            //     Mail::to($user->email)->send(new notifyRac($info));
            // }

            foreach ($regionUsers as $user) {

                $contactList[$i] = $user->email;
                $i++;
            }

            // $simple_array = array(); //simple array

            // $array = array_values($contactList);
            // var_dump($array);

            $array = implode(', ', $contactList);
            // print_r($array);

            //$this->testHttp($contactList, $info);
            //  $emails = array('reagan@ecowebplus.com', 'support@ecowebplus.com');

            foreach ($contactList as $email) {

                $this->testHttp($email, $info);

            }

        }
		
        $meeting->save();
        $region = Region::find($meeting->region_id);

        if($region->name == "All Regions")
        {
            $users = User::all();
        }
        else
        {
            $users = $region->users()->get();
        }
      
        foreach ($users as $user) 
        {
            $sendMeetingEmail = (new SendMeetingEmail($meeting, $user, $region->name));
            dispatch($sendMeetingEmail);
        }
    
        return response()->json($meeting);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(Meeting $meeting)
    {
        return response()->json($meeting);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        $regions = Region::all();
        return response()->json([$meeting, $regions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meeting $meeting, $id)
    {

        //  return $request;

        //  $request['payload'] = json_decode($request['payload']);

        // $meeting->update($request->valide([
        //     'date' => 'required|date',
        //     'time' => 'required|time',
        //     'region_id' => 'required',
        //     'description' => 'required'
        // ]));

        $news = Meeting::findOrFail($id);
        $data = array('date' => $request->input('date'), 'time' => $request->input('time'), 'description' => $request->input('description'), 'region_id' => $request->input('region_id'));
        $news->fill($data)->save();

        //  return response()->json($data);

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        return response()->json($meeting->delete());
    }

    public function sendMail1()
    {

        // $email ='reagan@ecowebplus.com';

        $regionId = 3;

        $getRegionName = DB::table('regions')->where('id', $regionId)->first();

        $info = [
            'date' => '2020-05-08 04:29:59',
            'time' => '04:29:59',
            'regionName' => $getRegionName->name,
        ];

        $users = User::all();

        $regionUsers = DB::table('users')
            ->where('region_id', '=', $regionId)->get();

        if ($regionId = 10) {

            // Send Rac notification to all the users
            foreach ($users as $user) {
                // Mail::to($user->email)->send(new notifyRac($info));

                $new_mail = new TestMail($user->email, $info);
                $new_mail->sendMail();

            }
        } else {

            // Send Rac Notification to region users only
            foreach ($regionUsers as $user) {
                // Mail::to($user->email)->send(new notifyRac($info));

                $new_mail = new TestMail($user->email, $info);
                $new_mail->sendMail();

            }

        }

        // return response()->json($meeting->save());
        return 'Email sent';
    }

    public function send()
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new notifyRac());
        }

    }

    //FINAL: WORKING ITOUCH EMAIL

    public function testHttp($emails, $info)
    {

        // $info = [
        //     'date' => '14-jan-2021',
        //     'time' => '10:23',
        //     'description' => 'Test',
        //     'regionName' => 'RAC',
        // ];

        // $hello = "Hello";

        // $emails = array('reagan@ecowebplus.com', 'support@ecowebplus.com');

        //  echo "$email <br>";
        $params = [
            'apiKey' => '8adc85db-ca07-4208-be83-5e12b004111f',
            'from' => [
                'name' => 'MWPF - RAC PORTAL',
                'email' => 'reagan@ecowebplus.com',
            ],
            'to' => [
                'name' => 'Rac Member',
                'email' => $emails,
            ],
            // //'template' => [ view('users.edit', compact('user'))->render();
            //     'template' => view('mail.test', [$info])->render(),
            //     //"html" => "<html><p style='color:blue'>Hi, Kindly find the link to your Benefit Statement below</p>TEST<p></></html>",
            //     // "text" => "Helo World",
            //     "subject" => 'testing body',
            // ],

            'template' => [
                'html' => view('mail.notifyRac')->with('info', $info)->render(),
                'subject' => 'RAC Meeting',
            ],

        ];

        $url = 'https://omniapi.itouch.co.za/campaigns/email/3165/emails';

        $data = json_encode($params);

        $request = $url;
        // Generate curl request
        $session = curl_init($request);
        // Tell curl to use HTTP POST
        curl_setopt($session, CURLOPT_POST, true);
        // Tell curl that this is the body of the POST
        curl_setopt($session, CURLOPT_POSTFIELDS, $data);
        // Tell curl not to return headers, but do return the response
        curl_setopt($session, CURLOPT_HEADER, true);
        // Tell PHP not to use SSLv3 (instead opting for TLS)
        //curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
        curl_setopt($session, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Connection: Keep-Alive',
        ));
        curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

        // obtain response
        $response = curl_exec($session);
        curl_close($session);
        // $logger->info(print_r($response, true));
        // print everything out
        print_r($response);

    }

    public function sendMail()
    {

        $emails = array('reagan@ecowebplus.com', 'support@ecowebplus.com');

        foreach ($emails as $email) {

            $this->testHttp($email);

        }

    }

    // public function sendMail()
    // {

    //     $emails = array('reagan@ecowebplus.com', 'support@ecowebplus.com');

    //     foreach ($emails as $email) {

    //         $this->testHttp($email);

    //     }

    // }
}
