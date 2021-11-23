<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
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
    return view('frontend.pages.index');
});


//frontend routes

Route::get('/home',[HomeController::class,'index']);
Route::get('/apply-offshore',[HomeController::class,'offshore_form']);
Route::get('/apply-onshore',[HomeController::class,'onshore_form']);
Route::get('/apply-agent',[HomeController::class,'agent_form']);
Route::get('/become-agent',[HomeController::class,'agent']);
Route::post('/apply-offshore/store',[HomeController::class,'store_ofshore'])->name('offshore.store');