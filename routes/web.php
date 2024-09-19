<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

//Show the home page
Route::get('/', function () {
    return view('home', ['greeting' => 'Hi!', 'name' => 'John Wick']);     //Now we can use a $greeting variable in the views to access it's value from the route
});

//Show all jobs
Route::get('/jobs', function () {
    $job = Job::with('employer')->latest()->paginate(5);
    return view('jobs.index', [
        'jobs' => $job
    ]);
});

//Show a create job form
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Creates a job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
})->name('create-job');

//Show an edit job form
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

//Updates the job
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    //authorize
    $job = Job::findOrFail($id);

    //update
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    //and persist
    //redirect
    return redirect('/jobs/' . $job->id);

});

//Delete a job
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();
    return redirect('/jobs');

});

//show individual job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

//Show contact page
Route::get('/contact', function () {
    return view('contact');
});
