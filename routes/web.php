<?php

use App\Http\Controllers\TestDriveController;
use App\Mail\TestDriveMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
//Route::get('/admin', function(){
//    return view('origin');
//});
Route::get('/print', 'TestDriveController@export')->name('print');

Auth::routes();

Route::get('/{language}/admin', 'HomeController@index')->name('admin');

Route::redirect('/register', '/laos');//redirect homepage to /en




Route::get('/test-drive', function () {
    return redirect('/en/test-drive');
});

Route::redirect('/', '/laos');//redirect homepage to /en

Route::group(['prefix' => '{language}'], function(){
    Route::get('/', function($language=null){
        App::setLocale($language);
        return view('index');
    })->name('home');

    Route::get('/contact', function($language=null){
        App::setLocale($language);
        return view('contact');
    })->name('contact');

    Route::get('/product', function($language=null){
        App::setLocale($language);
        return view('product');
    })->name('product');

    Route::get('/test-drive', function($language=null){
        App::setLocale($language);
        return view('test_drive');
    })->name('test_drive');

    Route::get('/dealer', function($language=null){
        App::setLocale($language);
        return view('dealer');
    })->name('dealer');

    Route::post('/send-email', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send-email');
    Route::post('/submit-test-drive', [TestDriveController::class, 'submitTestDriveEmail'])->name('submit-test-drive-email');
});








