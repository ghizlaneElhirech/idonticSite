<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
 
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

Route::group( 
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ 
     Route::resource('visitors', 'VisitorController');
     Route::get('/','VisitorController@index');
    
});
Route::group(['middleware' => ['guest']], function () {

    Route::get('/login', function () {
        return view('auth.login');
    });
    

});

Auth::routes();



Route::group(
    [ 
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

 //==============================Translate all pages============================

     //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');


    
    
     //==============================visitors-type============================
    
        Route::resource('types', 'VisitorTypeController');
      //==============================visitors-type============================
    
        Route::resource('visitorsadmin', 'VisitorAdminController');
        
          //==============================products============================
    
        Route::resource('products', 'ProductAdminController');
         //==============================questions============================
    
        Route::resource('questions', 'QuestionController');
        //==============================users============================
           Route::resource('users','UserController');
        
    
    
       
       


});

Route::get('MarkAsRead_all','VisitorController@MarkAsRead_all')->name('MarkAsRead_all');

Route::get('unreadNotifications_count', 'VisitorController@unreadNotifications_count')->name('unreadNotifications_count');

Route::get('unreadNotifications', 'VisitorController@unreadNotifications')->name('unreadNotifications');



//fullcalender
Route::get('/fullcalendareventmaster','FullCalendarEventMasterController@index');
Route::get('/fullcalendareventmaster/create','FullCalendarEventMasterController@create');
Route::get('/fullcalendareventmaster/update','FullCalendarEventMasterController@update');
Route::get('/fullcalendareventmaster/delete','FullCalendarEventMasterController@destroy');

Route::get('/calendar', function () {
    return view('layouts.app');
});

 