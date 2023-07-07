<?php

use Illuminate\Support\Facades\Route;
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

Route::redirect('/', '/formPage');

Route::get('/formPage', [FormController::class, "register"])->name('formPage#register');
Route::post('/formPage/create', [FormController::class, "create"])->name('formPage#create');
Route::get('/formPage/show', [FormController::class, "show"])->name('formPage#show');
Route::get('/formPage/edit/{id}', [FormController::class, "edit"])->name('formPage#edit');
Route::post('/formPage/update', [FormController::class, "update"])->name('formPage#update');
