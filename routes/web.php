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
Route::get('/how-to-apply',[HomeController::class,'how_to_apply']);
Route::get('/intake-date',[HomeController::class,'intake_date']);
Route::get('/who-can-apply',[HomeController::class,'who_can_apply']);
Route::get('/first-day',[HomeController::class,'first_day']);
Route::get('/orientation',[HomeController::class,'orientation']);
Route::get('/campus-location',[HomeController::class,'campus_location']);
Route::get('/student-support',[HomeController::class,'student_support']);
Route::get('/rules-regulations',[HomeController::class,'rules_regulations']);
Route::get('/airport-pick-up',[HomeController::class,'airport_pick_up']);
Route::get('/oshc',[HomeController::class,'oshc']);
Route::get('/faqs',[HomeController::class,'faqs']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/international-students',[HomeController::class,'international_student']);
Route::get('/message-ceo',[HomeController::class,'message_ceo']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/notice',[HomeController::class,'notice']);






Route::post('/apply-offshore/store',[HomeController::class,'store_ofshore'])->name('offshore.store');