<?php

use App\Http\Controllers\CurriculumController;
use App\Mail\SendCurriculumMail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/curriculo', [CurriculumController::class, 'create'])->name('curriculum.create');
Route::post('/curriculo', [CurriculumController::class, 'store'])->name('curriculum.store');
Route::get('/enviado', function(){
    return view('success-send-form');
});

