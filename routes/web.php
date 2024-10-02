<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UserController;

//Show the home page
// Route::get('/', function () {
//     return view('home', ['greeting' => 'Hi!', 'name' => 'John Wick']);     //Now we can use a $greeting variable in the views to access it's value from the route
// });

Route::view('/', 'home', ['greeting' => 'Hi!', 'name' => 'John Wick']);

Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', [JobsController::class, 'store'])->name('create-job');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
    Route::get('/jobs/{job}', 'show');
});

// Route::resource('jobs', JobsController::class);

//Auth
Route::get('/register', [UserController::class, 'create']);

//Show contact page
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');     //Show contact page
