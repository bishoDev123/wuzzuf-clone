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

    public function edit(Job $job) {
        return view('job.edit', ['job' => $job]);
    }
}
