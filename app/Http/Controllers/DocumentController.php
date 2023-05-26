<?php

namespace App\Http\Controllers;
use Mail;
use App\Document;
use App\User;
use Faker\Provider\File;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;
use App\Mail\meetingNotifyRac;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendDocumentEmail;
use App\Region;

use Storage;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();
        return response()->json($documents);
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
//        $request['payload'] = json_decode($request['payload']);

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
        $fileNameToSave = $filename.'_'.time().'.'.$fileExt;
        //Upload the file to file storage
       // $path = $request->file->storeAs('public/uploads', $fileNameToSave );

        $path = $request->file->storeAs('private/uploads', $fileNameToSave );
        // Storage::move($fileNameToSave, 'public/uploads');
       // $fileExt->move('public/uploads', $fileNameToSave);

        $document = new Document();
        $document->refNo = $request->input('payload.refNo');
        $document->name = $request->input('payload.name');
        $document->file = $fileNameToSave;
        $document->description = $request->input('payload.description');
        $document->region_id = $request->input('payload.region_id');

		$document->save();
        $region = Region::find($document->region_id);

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
            $sendDocumentEmail = (new SendDocumentEmail($document, $user, $region->name));
            dispatch($sendDocumentEmail);
        }

        return response()->json($document);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
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
    public function update(Request $request, Document $document, $id)
    {
        $fileOld = $document->file;
        
        $request['payload'] = json_decode($request['payload']);

        //Get file name with the extension
        $fileName = $request->file('file')->getClientOriginalName();

        //GEt just the file name
        $filename = pathinfo($fileName, PATHINFO_FILENAME);
        //Get the extension of the file
        $fileExt = $request->file('file')->getClientOriginalExtension();
        //The complete name of the file to be stored.
        $fileNameToSave = $filename.'_'.time().'.'.$fileExt;

        //Upload the file to file storage
        $path = $request->file->storeAs('private/uploads', $fileNameToSave );

       //  $document = new Document();
       //  $document = Document::find($id);
       //  $document->refNo = $request->input('payload.refNo');
       //  $document->name = $request->input('payload.name');
       //  $document->file = $fileNameToSave;
       //  $document->description = $request->input('payload.description');
       //  $document->region_id = $request->input('payload.region_id');

       // // unlink(storage_path('app/public/uploads/'.$fileOld));

         $news = Document::findOrFail($id);
         $data = array('refNo'=> $request->input('payload.refNo'), 'name'=>$request->input('payload.name'), 'description' => $request->input('payload.description'), "file"=>$fileNameToSave, 'region_id'=>$request->input('payload.region_id'));
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
    public function destroy(Document $document)
    {
        $file = $document->file;
        
		//Storage::disk('public')->delete('uploads/'.$file);
		
		if(Storage::disk('private')->exists('uploads/'.$file))
        {
			unlink(storage_path('app/private/uploads/'.$file));
        }
		
        return response()->json($document->delete());
    }

    public function getComments(Document $document){
        return response()->json($document->comments()->get());
    }

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
        $fileNameToSave = $filename.'_'.time().'.'.$fileExt;
        //Upload the file to file storage
        $path = $request->file->storeAs('public/uploads', $fileNameToSave );

        $doc = new Document();
        $doc->refNo = $request->input('payload.refNo');
        $doc->name = $request->input('payload.name');
        $doc->file = $fileNameToSave;
        $doc->description = $request->input('payload.description');
        $doc->region_id = $request->input('payload.region_id');

        return $doc;
    }
}
