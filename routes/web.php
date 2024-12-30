<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisterUserController;
use Barryvdh\DomPDF\Facade\PDF;
//Show the home page
// Route::get('/', function () {
//     return view('home', ['greeting' => 'Hi!', 'name' => 'John Wick']);     //Now we can use a $greeting variable in the views to access it's value from the route
// });

Route::view('/', 'home', ['greeting' => 'Good Afternoon', 'name' => 'Mr. Wick!']);

Route::controller(JobsController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth');
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
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

//Always use a post request to logout the current user

//Show contact page
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');     //Show contact page

//to view or download pdfs

Route::get('/pdf', function () {
    // Load the view as PDF
    // $pdf = PDF::loadView('pdf.document')->setPaper('a4', 'portrait');
    $pdf = PDF::loadView('pdf.patients-state');
    // $pdf = PDF::loadView('pdf.daily-cash-details')->setPaper('a4', 'landcsape');
    // $pdf = PDF::loadView('pdf.patients-record')->setPaper('a4', 'landscape');

    // Stream PDF in the browser
    return $pdf->stream('sample-document.pdf');

    // return view('pdf.document');
});
