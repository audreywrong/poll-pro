<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin/polls/create', [Inani\Larapoll\Http\Controllers\PollManagerController::class, 'create'])->name('poll.create');
// Route::get('/polls/details', [App\Http\Controllers\PollController::class, 'view_details'])->name('poll.details');
