<?php

use Illuminate\Http\Request;

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

Route::get('external-books/{name}', 'ExternalApiController@index');

Route::group(['prefix' => 'v1'], function () {
    // List articles
    Route::get('books', 'BookController@index')->name('index');

    // List single article
    Route::get('books/{id}', 'BookController@show')->name('show');

    // Create new article
    Route::post('books', 'BookController@store')->name('store');

    // Update article
    Route::put('books/{id}', 'BookController@update')->name('update');

    // Delete article
    Route::delete('books/{id}', 'BookController@destroy')->name('delete');
});
