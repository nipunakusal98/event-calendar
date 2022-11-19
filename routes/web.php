<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CalenderController;

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

Route::get('/dashboard', function () {
    return view('Backend.Dashboard');
})->name('dashboard');

Route::get('/calender', function () {
    return view('Backend.Calender');
});


Route::get('/view',[CalenderController::class,'view'])->name('calender.view');