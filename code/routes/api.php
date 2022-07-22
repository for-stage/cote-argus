<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalControler;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test', function () {
    return 'test hhhhhhh';
});
// Route::resource('animal', AnimalControler::class );

Route::get('animals', 'App\Http\Controllers\AnimalControler@index');
Route::get('animals/{animal}', 'App\Http\Controllers\AnimalControler@show');
Route::post('animals', 'App\Http\Controllers\AnimalControler@store');
Route::put('animals/{animal}', 'App\Http\Controllers\AnimalControler@update');
Route::delete('animals/{animal}', 'App\Http\Controllers\AnimalControler@destroy');


