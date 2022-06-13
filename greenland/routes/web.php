<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [Controller::class, 'home']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/services', [Controller::class,'viewServices']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//edit user data
Route::put('/edituser/{id})', [App\Http\Controllers\Controller::class, 'edituser']);

//call service for users
Route::get('/volunteer/{service_id}', [App\Http\Controllers\Controller::class, 'viewvolunteer'])->middleware('auth');
Route::get('/volunteer/{service_id}/user/{user_id}', [App\Http\Controllers\Controller::class, 'volunteer'])->middleware('auth');

//add image in registration
Route::post('/store-image',[App\Http\Controllers\Controller::class,'storeImage'])
->name('images.store');


// sign for newsletter
Route::post('/news', [App\Http\Controllers\Controller::class, 'news']);

// contact us
Route::post('/contact', [App\Http\Controllers\Controller::class, 'contact']);
