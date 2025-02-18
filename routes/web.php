<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function (Job $job) {
    return view('job.show', ['jobs' => $job->all()]);
});
