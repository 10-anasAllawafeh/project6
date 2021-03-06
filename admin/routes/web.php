<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Voyager;

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

Route::get('/', function () {
    return redirect('/admin');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/admin/approve',[Controller::class, 'render']);
Route::get('/admin/dashboard',[Controller::class, 'dashboard']);
// Route::get('/admin',[Controller::class, 'dashboard']);
Route::post('/admin/approve/done',[Controller::class, 'aprrove']);