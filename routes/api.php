<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true ");
header("Access-Control-Allow-Methods: OPTIONS, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Depth, User-Agent, X-File-Size, X-Requested-With, If-Modified-Since, X-File-Name, Cache-Control");

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



//User Routes
Route::get('/contact-index', 'UserController@index');
Route::post('/contact-store', 'UserController@store');
Route::get('/contact-show/{user}', 'UserController@show');
Route::get('/contact-edit/{user}', 'UserController@edit');
Route::put('/contact-update/{user}', 'UserController@update');
Route::post('/contact-delete/{user}', 'UserController@destroy');
Route::put('/contact-changeStatus/{user}', 'UserController@changeStatus');

//Region Routes
Route::get('/region-index', 'RegionController@index');
Route::post('/region-store', 'RegionController@store');
Route::get('/region-show/{region}', 'RegionController@show');
Route::get('/region-edit/{region}', 'RegionController@edit');
Route::put('/region-update/{region}', 'RegionController@update');
Route::post('/region-delete/{region}', 'RegionController@destroy');
Route::get('/region-getContactsByRegion/{region}', 'RegionController@getContactsByRegion');
Route::get('/region-getContacts', 'RegionController@getContacts');
Route::get('/region-getMeetings/{region}', 'RegionController@getMeetings');

//Meeting Routes
Route::get('/meeting-index', 'MeetingController@index');
Route::post('/meeting-store', 'MeetingController@store');
Route::get('/meeting-show/{meeting}', 'MeetingController@show');
Route::get('/meeting-edit/{meeting}', 'MeetingController@edit');
Route::put('/meeting-update/{id}', 'MeetingController@update');
Route::post('/meeting-delete/{meeting}', 'MeetingController@destroy');

//Documents routes
Route::get('/document-index', 'DocumentController@index');
Route::post('/document-store', 'DocumentController@store');
Route::get('/document-show/{document}', 'DocumentController@show');
Route::get('/document-edit/{document}', 'DocumentController@edit');
Route::put('/document-update/{id}', 'DocumentController@update');
Route::post('/document-delete/{document}', 'DocumentController@destroy');
Route::get('/document-comments/{document}', 'DocumentController@getComments');

//Newsletters routes
Route::get('/newsletter-index', 'NewsletterController@index');
Route::post('/newsletter-store', 'NewsletterController@store');
Route::get('/newsletter-show/{newsletter}', 'NewsletterController@show');
Route::get('/newsletter-edit/{newsletter}', 'NewsletterController@edit');
Route::put('/newsletter-update/{newsletter}', 'NewsletterController@update');
Route::post('/newsletter-delete/{newsletter}', 'NewsletterController@destroy');
Route::get('/newsletter-comments/{newsletter}', 'NewsletterController@getComments');

//comments routes
Route::get('/comment-index', 'CommentsController@index');
Route::post('/comment-store', 'CommentsController@store');
Route::get('/comment-show/{comment}', 'CommentsController@show');
Route::get('/comment-edit/{comment}', 'CommentsController@edit');
Route::put('/comment-update/{comment}', 'CommentsController@update');
Route::post('/comment-delete/{comment}', 'CommentsController@destroy');

// User routes
Route::get('/my-region/{region}', 'RegionController@myregion');
Route::get('/my-meeting/{region}', 'RegionController@mymeeting');
Route::get('/my-document/{region}', 'RegionController@mydocument');
Route::get('/my-newsletter/{region}', 'RegionController@mynewsletter');

// Chat routes
Route::get('/get-users', 'UserController@getUsers');
Route::get('/get-admin', 'UserController@getAdmin');
Route::post('/chat-store', 'UserController@saveChat');
Route::get('/chat-notify', 'UserController@getNotifications');
Route::post('/userChat-store', 'UserController@userSaveChat');
Route::get('/get-chats/{id}', 'UserController@getChats');
Route::get('/my-newsletter/{region}', 'RegionController@mynewsletter');


// Analytics Routes
Route::get('/get-dailyVisitors', 'UserController@dailyVisitors');
Route::get('/get-totalVisitors', 'UserController@totalVisitors');
Route::get('/get-dailyLogins', 'UserController@dailyLogins');
Route::get('/get-totalLogins', 'UserController@totalLogins');


Route::get('/my-meeting', 'MeetingController@mymeeting');
Route::get('/my-documents', 'MeetingController@mydocuments');
Route::get('/my-newsle', 'NewsletterController@mydocuments');
Route::get('/http', 'NewsletterController@testHttp');
