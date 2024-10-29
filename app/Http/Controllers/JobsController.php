<?php

namespace App\Http\Controllers;


use Gate;
use App\Models\Job;
use App\Models\User;
use App\Mail\JobPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class JobsController extends Controller
{
    public function index()
    {
        $job = Job::with('employer')->latest()->paginate(5);
        return view('jobs.index', [
            'jobs' => $job
        ]);
    }
    public function show(Job $job)
    {
        return view('jobs.show', compact('job'));
    }
    public function create()
    {
        return view('jobs.create');
    }
    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->send(       //Laravel is smart enough that it will automatically get the email of the user
            new JobPosted($job)
        );

        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
        //step 1 :: You need to be signed in (Authentication)
        // if (Auth::guest()) {
        //     return redirect('/login');
        // }

        //step 2 :: To check whether the sign in peron is the same one who created the job or not (Authorization)

        //Moved the gate definition to the AppServiceProvider


        // if ($job->employer->user->isNot(Auth::user())) {  //$model->is() determines if two models have the same id and belongs to the same table
        //     abort(403);
        // }

        // Gate::authorize('edit-job', $job);

        //use these if you want to show a custom msg instead of aborting it
        // if (Gate::denies('edit-job', $job)){
        //     //
        // }
        // if (Gate::allows('edit-job', $job)){
        //     //
        // }

        //step 3 :: Define gates inside the AppServiceProvider

        //step 4 :: $model->can() determines if the given entity has the given abilities
        //defined in views

        //step 5 :: middleware authorization in routes

        //step 6 :: policies

        return view('jobs.edit', compact('job'));
    }
    public function update(Job $job)
    {
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
        //authorize

        //update
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        //and persist
        //redirect
        return redirect('/jobs/' . $job->id);

    }
    public function destroy(Job $job)
    {
        Gate::authorize('edit', $job);

        $job->delete();
        return redirect('/jobs');

    }
}
