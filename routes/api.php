<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
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

// Route::get('books', 'BookController@index'); // show/read all data
// Route::post('books', 'BookController@store'); // create new data
// Route::get('books/{id}', 'BookController@show'); // show/read data by id (detail data)
// Route::get('books/{id}', 'BookController@update'); // update data
// Route::delete('books/{id}', 'BookController@destroy'); // delete data

/*route untuk book*/

Route::resource('books', 'BookController');

/*route untuk author*/

Route::resource('authors', 'AuthorController');

/*route auth jwt api*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('user-profile', 'AuthController@userProfile');
});
