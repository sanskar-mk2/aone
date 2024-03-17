<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (Request $request) {
    $formValidationSuccess = Session::get('formValidationSuccess', false);
    return view('welcome')->with(compact('formValidationSuccess'));
})->name('welcome');

Route::post('/appointmentform', AppointmentForm::class)->name("form.submit");
