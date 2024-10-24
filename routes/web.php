<?php

use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;

//Show the home page
// Route::get('/', function () {
//     return view('home', ['greeting' => 'Hi!', 'name' => 'John Wick']);     //Now we can use a $greeting variable in the views to access it's value from the route
// });

Route::view('/', 'home', ['greeting' => 'Hi!', 'name' => 'John Wick']);

Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store')->middleware('auth')->name('create-job');
    Route::get('/jobs/{job}/edit', 'edit')->middleware('auth')->can('edit', 'job');
    Route::patch('/jobs/{job}', 'update')->middleware('auth')->can('edit', 'job');
    Route::delete('/jobs/{job}', 'destroy')->middleware('auth')->can('edit', 'job');
    Route::get('/jobs/{job}', 'show');
});

// Route::resource('jobs', JobsController::class);

//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Always use a post request to logout the current user

//Show contact page
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');     //Show contact page
