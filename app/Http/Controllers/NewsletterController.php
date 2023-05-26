<?php
namespace App\Http\Controllers;

use App\Mail\newsletterNotifyRac;
use App\Newsletter;
use App\User;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
// use Illuminate\Support\Facades\Storage;
use Mail;
use PhpParser\Comment\Doc;

use App\Region;
use App\Jobs\SendNewsLetterEmail;

use Storage;


class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newLetters = Newsletter::all();
        return response()->json($newLetters);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request['payload'] = /

//        $this->validate($request, [
        //            'payload.refNo' => 'required|min:5',
        //            'payload.name' => 'required|min:3',
        //            'file' =>'required|file|max:1999',
        //            'payload.description' => 'required|max:250',
        //            'payload.region_id' => 'required'
        //        ]);

//        dd("Inside store Action");

        $request['payload'] = json_decode($request['payload']);

        //Get file name with the extension
        $fileName = $request->file('file')->getClientOriginalName();
        //GEt just the file name
        $filename = pathinfo($fileName, PATHINFO_FILENAME);
        //Get the extension of the file
        $fileExt = $request->file('file')->getClientOriginalExtension();
        //The complete name of the file to be stored.
        $fileNameToSave = $filename . '_' . time() . '.' . $fileExt;
        //Upload the file to file storage
        $path = $request->file->storeAs('private/uploads', $fileNameToSave);

        $newsletter = new Newsletter();
        $newsletter->name = $request->input('payload.name');
        $newsletter->file = $fileNameToSave;
        $newsletter->status = 1;
        $newsletter->region_id = $request->input('payload.region_id');

		$newsletter->save();

        $region = Region::find($newsletter->region_id);

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
            $sendNewsLetterEmail = (new SendNewsLetterEmail($newsletter, $user, $region->name));
            dispatch($sendNewsLetterEmail);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $document, $id)
    {

        // return $document;

        $fileOld = $document->file;

        $request['payload'] = json_decode($request['payload']);

        // return  $request['payload'];

        //Get file name with the extension
        $fileName = $request->file('file')->getClientOriginalName();
        //return $fileName;
        //GEt just the file name
        $filename = pathinfo($fileName, PATHINFO_FILENAME);
        //Get the extension of the file
        $fileExt = $request->file('file')->getClientOriginalExtension();
        //The complete name of the file to be stored.
        $fileNameToSave = $filename . '_' . time() . '.' . $fileExt;

        //Upload the file to file storage
        $path = $request->file->storeAs('private/uploads', $fileNameToSave);

//        $doc = new Document();

        //unlink(storage_path('app/public/uploads/'.$fileOld));

        //  $id->update($request->validate([
        //     'name' => 'required|min:3',
        //     'file' => 'required',
        //     'region_id' => 'required',
        // ]));

        //      $this->validate($request, [
        //          'name' => 'required|min:3',
        //         'file' => 'required',
        //         'region_id' => 'required',
        // ]);

        // $document->name = $request->input('payload.name');
        // $document->file = $fileNameToSave;
        // $document->region_id = $request->input('payload.region_id');

        $news = Newsletter::findOrFail($id);
        $data = array('name' => $request->input('payload.name'), "file" => $fileNameToSave, 'region_id' => $request->input('payload.region_id'));
        $news->fill($data)->save();

        return response()->json($data);

        //return response()->json($document->save());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {

        $file = $newsletter->file;
        
		//Storage::disk('public')->delete('uploads/'.$file);
		
		if(Storage::disk('private')->exists('uploads/'.$file))
        {

            unlink(storage_path('app/private/uploads/' . $file));
        }
		
        return response()->json($newsletter->delete());
    }

//    public function getComments(Document $document){
    //        return response()->json($document->comments()->get());
    //    }

    public function saveFile(Request $request)
    {
        $request['data'] = json_decode($request['data']);
        //Get file name with the extension
        $fileName = $request->file('file')->getClientOriginalName();
        //GEt just the file name
        $filename = pathinfo($fileName, PATHINFO_FILENAME);
        //Get the extension of the file
        $fileExt = $request->file('file')->getClientOriginalExtension();
        //The complete name of the file to be stored.
        $fileNameToSave = $filename . '_' . time() . '.' . $fileExt;
        //Upload the file to file storage
        $path = $request->file->storeAs('private/uploads', $fileNameToSave);

        $new = new Newsletter();
        $new->name = $request->input('payload.name');
        $new->file = $fileNameToSave;
        $new->status = 1;
        $new->region_id = $request->input('payload.region_id');

        return $new;
    }

    public function testHttp()
    {

        // $response = Http::get('https://reqres.in/api/users');

        // // get the response as JSON
        // $dataJSON = $response->json();

        // dd($dataJSON);

        // $client = new Client;
        // $request = $client->get('https://jsonplaceholder.typicode.com/posts');
        // $response = $request->getBody();

        // $headers = [
        //     'Content-Type' => 'application/json',
        //     'AccessToken' => 'key',
        //     'Authorization' => 'Bearer token',
        // ];

        // $client = new GuzzleClient([
        //     'headers' => $headers,
        // ]);

        // $body = '{
        //     "key1" : ' . $value1 . ',
        //     "key2" : ' . $value2 . ',
        // }';

        // $r = $client->request('POST', 'http://example.com/api/postCall', [
        //     'body' => $body,
        // ]);
        // $response = $r->getBody()->getContents();

        // dd($response);

        //  $response = Http::get('http://test.com');

        //  return 'test';

    }
}
