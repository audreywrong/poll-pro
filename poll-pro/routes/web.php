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

Route::get('/admin/polls/create', [App\Http\Controllers\PollController::class, 'create'])->name('poll.create');

// Route::get('/admin/polls/create', [App\Http\Controllers\HomeController::class, 'index'])->name('poll.create');

// Route::get('/admin/polls/create', ['uses' => 'PollManagerController@create', 'as' => 'poll.create']);

// $prefix = config('larapoll_config.prefix');
// Route::group(['namespace' => 'Inani\Larapoll\Http\Controllers', 'prefix' => $prefix, 'middleware' => 'web'], function () {
//     Route::get('/admin/polls/create', [App\Http\Controllers\PollManagerController::class, 'create'])->name('poll.create');
//     // $middleware = config('larapoll_config.admin_auth');

//     // $guard = config('larapoll_config.admin_guard');
//     // Route::middleware(["$middleware:$guard"])->group(function () {

//     // });

//     // Route::post('/vote/polls/{poll}', 'VoteManagerController@vote')->name('poll.vote');
// });
