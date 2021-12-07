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

// Route::get('/', function () {
//     return redirect('/home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/apply-offshore',[HomeController::class,'offshore_form'])->name('apply-offshore');
Route::get('/apply-onshore',[HomeController::class,'onshore_form'])->name('apply-onshore');
Route::get('/apply-agent',[HomeController::class,'agent_form'])->name('apply-agent');
Route::get('/become-agent',[HomeController::class,'agent'])->name('become-agent');
Route::get('/how-to-apply',[HomeController::class,'how_to_apply'])->name('how-to-apply');
Route::get('/intake-date',[HomeController::class,'intake_date'])->name('intake-date');
Route::get('/who-can-apply',[HomeController::class,'who_can_apply'])->name('who-can-apply');
Route::get('/first-day',[HomeController::class,'first_day'])->name('first-day');
Route::get('/orientation',[HomeController::class,'orientation'])->name('orientation');
Route::get('/campus-location',[HomeController::class,'campus_location'])->name('campus-location');
Route::get('/student-support',[HomeController::class,'student_support'])->name('student-support');
Route::get('/rules-regulations',[HomeController::class,'rules_regulations'])->name('rules-regulations');
Route::get('/airport-pick-up',[HomeController::class,'airport_pick_up'])->name('airport-pick-up');
Route::get('/oshc',[HomeController::class,'oshc'])->name('oshc');
Route::get('/faqs',[HomeController::class,'faqs'])->name('faqs');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/international-students',[HomeController::class,'international_student'])->name('international-student');
Route::get('/message-ceo',[HomeController::class,'message_ceo'])->name('message-ceo');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/notice',[HomeController::class,'notice'])->name('notice');






Route::post('/apply-offshore/store',[HomeController::class,'store_ofshore'])->name('offshore.store');
Route::post('/apply-onshore/store',[HomeController::class,'store_onshore'])->name('onshore.store');
Route::post('/apply-agent/store',[HomeController::class,'store_agent_application'])->name('agent.store');
Route::post('/contact-form/store',[HomeController::class,'store_contact_form'])->name('contact.store');


Route::get('/course',[HomeController::class,'course'])->name('course');
Route::get('/child-education',[HomeController::class,'child_education'])->name('child-education');
Route::get('/commercial-cookery',[HomeController::class,'commercial_cookery'])->name('commercial-cookery');
Route::get('/community-service',[HomeController::class,'community_service'])->name('community-service');
Route::get('/hospitality-management',[HomeController::class,'hospitality_management'])->name('hospitality-management');
Route::get('/disability',[HomeController::class,'disability'])->name('disability');
Route::get('/policy',[HomeController::class,'policy'])->name('policy');
Route::get('/glazed',[HomeController::class,'glazed'])->name('glazed');
Route::get('/pork',[HomeController::class,'pork'])->name('pork');
Route::get('/Cauliflower',[HomeController::class,'Cauliflower'])->name('Cauliflower');
Route::get('/course',[HomeController::class,'course'])->name('course');

Route::get('/download-offsore',[HomeController::class,'offsore_download'])->name('offsore.download');
Route::get('/download-onsore',[HomeController::class,'onsore_download'])->name('onsore.download');
Route::get('/download-agent',[HomeController::class,'agent_download'])->name('agent.download');

