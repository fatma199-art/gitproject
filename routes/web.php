<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitController;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/g', function () {
    return view('git');
});



Route::get('/form', [FormController::class, 'showForm'])->name('show.form');
Route::post('/form', [FormController::class, 'processForm'])->name('process.form');