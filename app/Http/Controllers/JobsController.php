<?php

namespace App\Http\Controllers;


use App\Models\Job;
use Illuminate\Http\Request;

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
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);

        return redirect('/jobs');
    }
    public function edit(Job $job)
    {
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
        $job->delete();
        return redirect('/jobs');

    }
}
