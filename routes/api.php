<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CalendarController;

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
/*Route::group(['middleware' => 'auth:api'], function(){
   Route::apiResource('visitor','Api\VisitorController');
   Route::apiResource('question','Api\QuestionController'); 
});*/ 
/*Route::apiResource('visitor', 'Api\VisitorController')->middleware('client');*/
Route::apiResource('visitor', 'Api\VisitorController');
Route::apiResource('question','Api\QuestionController');
Route::apiResource('users','Api\UserController');
Route::apiResource('product','Api\ProductController');
Route::apiResource('event','Api\EventsController');
Route::middleware('api')->group(function () {
    Route::get('show-events' ,[CalendarController::class,'showEvents']);
});

