<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Job $job)
    {
        return view('job.index', ['jobs' => $job->all()]);
    }

    public function show(Job $job) {
        return view('job.show', ['job' => $job]);
    }

    public function create() {
        return view('job.create');
    }

    public function edit(Job $job) {
        return view('job.edit', ['job' => $job]);
    }

    public function store(Request $request) {
        Job::create($request->all());
        return redirect('/jobs');
    }
}
