<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\RacContact;
use App\Chat;
use App\ChatContent;
use App\Region;
use Illuminate\Http\Request;
use Session;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $regions = Region::all();

        return response()->json($regions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
		return 'it works';
/*
         $chat = new Chat;
		
		$chat->user1_id = ;
		$chat->user2_id = ;
		$chat->status = ;
		$chat->save()
		
		$chatContent = new chatContent;
		$chatContent->chat_id = $chat->id;
		$chatContent->message = $request()->description;

        return response()->json($region->save($chatContent));
		*/
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return response()->json($region);
    }

    private $regId;

    public function myregion($region)

    {

        $myregion = DB::table('users')->where('users.id', $region)
            ->join('regions', 'regions.id', '=', 'users.region_id')
            ->select('users.title', 'users.name', 'users.lastName', 'users.email', 'users.status', 'regions.id AS regionId', 'regions.name AS regioName', 'users.role')
            ->get();

        //  $regionId = $myregion[0]->regionId;
        $this->regId = $myregion[0]->regionId;

        //Session::put('regionid', $regionId);

        return response()->json($myregion);

        // return 'reagan';
      }







    public function mymeeting($region)

    {
        $myMeeting = DB::table('meetings')->where('meetings.region_id', $region)
            ->join('regions', 'regions.id', '=', 'meetings.region_id')
            // ->join('users', 'users.region_id', '=', 'regions.id')
            ->orWhere('meetings.region_id', 10)
            ->select('meetings.date', 'meetings.time', 'meetings.description', 'meetings.created_at', 'regions.id AS regionId', 'regions.name AS regionName')
            ->get();
       return response()->json($myMeeting);



       //   $myMeeting = DB::table('users')->where('users.region_id', $region)
       //      ->join('regions', 'regions.id', '=', 'users.region_id')
       //      ->join('meetings', 'meetings.region_id', '=', 'regions.id')
       //      ->orWhere('users.region_id', 10)
       //      ->select('meetings.date', 'meetings.time', 'meetings.created_at', 'users.status', 'regions.id AS regionId', 'regions.name AS regionName', 'users.role')
       //      ->get();
       // return response()->json($myMeeting);


       //dd($myMeeting);

    // return $myMeeting;
    }


    public function mydocument($region)

    {

        $myregion = DB::table('documents')->where('documents.region_id', $region)
            ->join('regions', 'regions.id', '=', 'documents.region_id')
               ->orWhere('documents.region_id', 10)
            ->select('regions.name AS regionName', 'documents.refNo', 'documents.name', 'documents.description', 'documents.file', 'documents.created_at')
            ->get();
        return response()->json($myregion);

        // return 'reagan';
    }






    public function mynewsletter($region)

    {
        $mynewsletters = DB::table('newsletters')->where('newsletters.region_id', $region)
            ->join('regions', 'regions.id', '=', 'newsletters.region_id')
            ->orWhere('newsletters.region_id', 10)
            ->select('regions.name AS regionName', 'newsletters.name', 'newsletters.file', 'newsletters.created_at')
            ->get();
        return response()->json($mynewsletters);
        // return 'reagan';
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        return response()->json($region);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Region $region)
    {
        $region->update($request->validate(
            [
                'name' => 'required|min:3'
            ]
        ));

        return response()->json($region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Region $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        return response()->json($region->delete());
    }

    public function getContactsByRegion(Region $region)
    {

        return response()->json($region->users()->get());
    }

    public function getMeetings(Region $region)
    {
        return response()->json($region->meetings()->get());
    }
}
