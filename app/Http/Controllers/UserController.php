<?php

namespace App\Http\Controllers;

use App\Chat;
use App\chatContent;
use App\Events\PrivateMessageSentEvent;
use App\Notification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

use App\Region;
use App\Jobs\SendUserEmail;
use Illuminate\Support\Facades\Validator;


date_default_timezone_set('Africa/Johannesburg');

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = User::all();
        return response()->json($contacts);

        // return 'test';
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

    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'title' => 'required',
            'name' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email',
            'region_id' => 'required',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return response()->json($request);

        // $request[] = array('password'=> ucfirst($request['name']));
		 $validator = Validator::make($request->all(),[
            'email' => 'required|unique:users|email',  // users is table name,email is column 
        ]);

        if ($validator->fails()) {    
            return response()->json($validator->messages(), 400);
        }
		
        $contact = User::create([
            'title' => $request['title'],
            'name' => $request['name'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'region_id' => $request['region_id'],
            'password' => bcrypt(ucfirst($request['name']) . '1'),
        ]);

        // dd($request['name']);
        // Send email to the member
        if ($request['email']) {
			
            $region = Region::find($request['region_id']);
            $sendUserEmail = (new SendUserEmail($contact, $region->name));
            dispatch($sendUserEmail);
        }

        return response()->json($contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $region = Region::all();
        return response()->json([$region, $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $user->update($request->validate([
            'title' => 'required',
            'name' => 'required|min:3',
            'lastName' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required',
            'region_id' => 'required',
            'role' => 'required',
            'password',
        ]));

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $deletedContact = $user->delete();
		
		
        //return response()->json($deletedContact);
		
		return response()->json($deletedContact);
    }

    /**Updating the status of the contact*/
    public function changeStatus(User $user)
    {
        $user->status = $user->status == 'active' ? 'inactive' : 'active';
        $updated = $user->update();
        return response()->json($updated);

    }

    public function getUsers()
    {

        $data = DB::table('users')
            ->whereIn('online_status', [1])
            ->Where('role', 'user')
            ->get();

        return response()->json($data);

        //var_dump($data);
        // dd($data);

    }

    public function getAdmin()
    {
        $data = DB::table('users')
            ->whereIn('online_status', [1])
            ->Where('role', 'admin')
            ->get();

        return response()->json($data);
        //var_dump($data);
        // dd($data);

    }

    public function getChats123($id, Request $request)
    {

        //return $request->user;
        $adminId = $request->user;
        $user = $id;

// return response()->json($data);
        $dateTime = new \DateTime();
        // $today = $dateTime->format('Y-m-d H:i:s');
        $today = $dateTime->format('Y-m-d');

        $data = DB::table('chats')->where('chats.identifiers', $adminId . ':' . $user)
            ->where('chats.created_at', $today)
            ->join('chat_contents', 'chat_contents.chat_id', '=', 'chats.id')
            ->join('users AS user1', 'user1.id', '=', 'chats.user1_id')
            ->join('users AS user2', 'user2.id', '=', 'chats.user2_id')
            ->orderby('chats.created_at', 'ASC')
            ->orWhere('chats.identifiers', $user . ':' . $adminId)
        // ->orWhere('chats.created_at', $today)
            ->select('chat_contents.message AS message', 'chats.created_at AS startdate', 'chats.updated_at AS enddate', 'user1.name AS username')
            ->get();

        $count = DB::table('chats')->where('created_at', $today)
            ->Where('user2_id', $adminId)
            ->count();

        //   return Carbon::today();

//
        //                  $day = date("Y-m-d");
        //                  $d=strtotime($day);
        //                  $now =  date("Y-m-d", $d);
        //
        //
        //                $count = DB::table('chats')
        //                    ->where('chats.identifiers', $user.':'.$adminId )
        //                    ->Where("chats.created_at", "<=", $now)
        //                    -

        // $arr = array(
        //     'data' => $data,
        //     'count' => $count,
        // );

        return response()->json($data);
        //  DB::disconnect('racportaldb');

        //var_dump($data);
        // dd($data);

    }

    public function getChats($id, Request $request)
    {

        //return $request->user;
        $adminId = $request->user;
        $user = $id;

// return response()->json($data);

        $data = DB::table('chats')->where('chats.identifiers', $adminId . ':' . $user)
            ->join('chat_contents', 'chat_contents.chat_id', '=', 'chats.id')
            ->join('users AS user1', 'user1.id', '=', 'chats.user1_id')
            ->join('users AS user2', 'user2.id', '=', 'chats.user2_id')
            ->orderby('chats.created_at', 'ASC')
            ->orWhere('chats.identifiers', $user . ':' . $adminId)
            ->whereDay('chats.created_at', NOW())
            ->select('chat_contents.message AS message', 'chats.created_at AS startdate', 'chats.updated_at AS enddate', 'user1.name AS username')
            ->get();
//
        //                  $day = date("Y-m-d");
        //                  $d=strtotime($day);
        //                  $now =  date("Y-m-d", $d);
        //
        //
        //                $count = DB::table('chats')
        //                    ->where('chats.identifiers', $user.':'.$adminId )
        //                    ->Where("chats.created_at", "<=", $now)
        //                    ->count();

        return response()->json($data);
        // DB::disconnect('racportaldb');

        //var_dump($data);
        // dd($data);

    }

    public function getNotifications()
    {

        $count = DB::table('notifications')
            ->where('chats.identifiers', $user . ':' . $adminId)
            ->Where("chats.created_at", "<=", $now)
            ->count();

    }

    public function saveChat(Request $request)
    {

        $chat = new Chat;

        $username = User::select('name')->where('id', $request->userid1)->get();

        $chat->user1_id = $request->userid1;
        $chat->user2_id = $request->userid2;
        $chat->identifiers = $request->userid1 . ':' . $request->userid2;
        $chat->created_at = NOW();
        $chat->updated_at = NOW();
        $chat->status = 1;
        $chat->save();

        //return $chat;

        $notify = new Notification;
        $notify->user_id = $request->userid1;
        $notify->chats = $request->message;
        $notify->created_at = NOW();
        $notify->updated_at = NOW();
        $notify->status = 0;
        $notify->save();

        $chatContent = new chatContent;
        $chatContent->chat_id = $chat->id;
        $chatContent->message = $request->message;
        $chatContent->save();

        $user = Auth::user();

        // send event to listeners
        broadcast(new PrivateMessageSentEvent($chatContent->message, $user, $username))->toOthers();

        return [
            'message' => $chatContent->message,
            'user' => $request->userid1,
            'name' => $username,
        ];

        // return $username;
        //  return response()->json($chatContent->save());

    }

    public function userSaveChat(Request $request)
    {
        $chat = new Chat;

        $chat->user1_id = $request->userid1;
        $chat->user2_id = $request->userid2;
        $chat->identifiers = $request->userid1 . ':' . $request->userid2;
        $chat->created_at = NOW();
        $chat->updated_at = NOW();
        $chat->status = 1;
        $chat->save();

        //return $chat;

        $chatContent = new chatContent;
        $chatContent->chat_id = $chat->id;
        $chatContent->message = $request->message;
        $chatContent->save();

        $notify = new Notification;
        $notify->user_id = $request->userid1;
        $notify->chats = $request->message;
        $notify->created_at = NOW();
        $notify->updated_at = NOW();
        $notify->status = 0;
        $notify->save();
        //  response()->json($chatContent->save());

        $user = Auth::user();

        // send event to listeners
        broadcast(new MessageSentEvent($message, $user))->toOthers();

        return [
            'message' => $chatContent->message,
            'user' => $user,
        ];

        // return $notify;
        // return response()->json($chatContent->save());

    }






    public function dailyVisitors(){

         $dateTime = new \DateTime();
        // $today = $dateTime->format('Y-m-d H:i:s');
        $today = $dateTime->format('Y-m-d');

        // Query builder
        $dailyVisitors = DB::table('analytics')->where(['created_at'=> $today, 'source' => 'Website'])
       // ->orWhere('source', '=', 'Website')
       ->count();

           return response()->json($dailyVisitors);
//return $today;
    }

    //where('created_at', '=', $today) ->

     public function totalVisitors(){
         $totalVisitors = DB::table('analytics')->where('source', '=', 'Website')
        ->count();
          return response()->json($totalVisitors);
    }


     public function dailyLogins(){

         $dateTime = new \DateTime();
        // $today = $dateTime->format('Y-m-d H:i:s');
        $today = $dateTime->format('Y-m-d');

         $dailyPortalVisitors = DB::table('analytics')->where(['created_at'=> $today, 'source' => 'userPortal', 'source' => 'adminPortal'])
        ->count();
          return response()->json($dailyPortalVisitors);
        
    }


     public function totalLogins(){

         $totalPortalVisitors = DB::table('analytics')->where('source', '=', 'userPortal')
           ->orWhere('source', '=', 'adminPortal')
        ->count();
        return response()->json($totalPortalVisitors);
    }

}
