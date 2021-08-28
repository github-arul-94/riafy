<?php

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', function () {return view('search');});
Route::get('/autocomplete', array('as' => 'autocomplete', 'uses' => 'SearchController@autocomplete'));
Route::get('/stockinfo', array('as' => 'stockinfo', 'uses' => 'SearchController@stockinfo'));
Route::get('/callAPI/{id}', array('as' => 'callAPI', 'uses' => 'SearchController@callAPI'));


