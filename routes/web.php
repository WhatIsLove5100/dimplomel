<?php

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index']);

Route::post('/direction', [App\Http\Controllers\MainController::class, 'detail']);

Route::post('/order', [App\Http\Controllers\OrderController::class, 'index']);

Route::post('/review', [App\Http\Controllers\ReviewController::class, 'index']);

Route::get('/aboutus/', function ()
{
    return view('aboutus');
});

Route::get('/contacts/', function ()
{
    return view('contacts');
});

Route::get('/order/', function ()
{
    return view('order');
});

Route::get('/feedback/', [App\Http\Controllers\AboutController::class, 'index']);