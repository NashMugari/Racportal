<?php

use App\Mail\notifyRac;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@index');

Route::get('/analytics', 'PagesController@analytics');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/chats', 'chat')->middleware('auth');
Route::resource('messages', 'MessageController')->only([
    'index',
    'store',
]);

Route::resource('private-messages', 'PrivateMessageController')->only([
    'index',
    'store',
]);

Route::get('/board', function () {
    return view('board');
});

Route::get('/freestate', function () {
    return view('freestate');
});

Route::get('/matlosane', function () {
    return view('matlosane');
});

Route::get('/carltonville', function () {
    return view('carltonville');
});

Route::get('/westonaria', function () {
    return view('westonaria');
});

Route::get('/emalalheni', function () {
    return view('emalalheni');
});

Route::get('/kwazulu', function () {
    return view('kwazulu');
});

Route::get('/secunda', function () {
    return view('secunda');
});

Route::get('/rustenburg', function () {
    return view('rustenburg');
});

Route::get('/phalaborwa', function () {
    return view('phalaborwa');
});

Route::get('/upcoming', function () {
    return view('upcoming');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Auth::routes();

Route::get('/home', 'AppController@index')->where('any', '.*');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', function () {
        return view('admin');
    })->name('admin');

});

Route::get('testemail', function () {
    \Mail::to(['reagan@ecowebplus.com'])->send(new notifyRac);
});

Route::get('testemail', function () {
    \Mail::to(['reagan@ecowebplus.com'])->send(new notifyRac);
});

Route::get('/testemail2', 'MeetingController@send');

Route::post('/testEmail', 'MeetingController@sendMail');

// New Template Controller
Route::get('board_of_trustees', 'PagesController@board_of_trustees');
Route::get('meetings_and_events', 'PagesController@meetings_and_events');
Route::get('regional_racs', 'PagesController@regional_racs');
Route::get('gallery_rac', 'PagesController@gallery_rac');
Route::get('cookies', 'PagesController@cookies');
Route::get('terms', 'PagesController@terms');

Route::get('contact', 'PagesController@contact');

// Get documents
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('storage/{filename}', 'FileController@getFile');
});