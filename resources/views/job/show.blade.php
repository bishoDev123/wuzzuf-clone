<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-950 mb-5">
    <x-layout blur="" bgColor="bg-slate-900"></x-layout>
    <br>
    <div class="mt-20">
        <div class="max-w-4xl mx-auto bg-gray-200/10 shadow-lg rounded-lg p-6">
            <div class="flex justify-between">
                <h1 class="text-2xl font-semibold text-white">{{ $job->title }}</h1>
                <x-button color="gray" href="/jobs/{{ $job->id }}/edit">EDIT</x-button>
            </div>
            <div class="flex flex-wrap items-center space-x-2 mt-2 text-sm text-gray-600">
                <x-tag href="/jobs">Freelance / Project</x-tag>
                <x-tag href="/jobs">Shift Based</x-tag>
                <x-tag href="/jobs">Remote</x-tag>
            </div>
            <div class="mt-2">
                <a href="/" class=" text-blue-600 font-medium">Microsoft</a>
                <p class="text-gray-500 text-sm">Cairo, Egypt • Posted 3 days ago</p>
            </div>

            <div class="mt-4 flex items-center justify-between text-white">
                <div>
                    <p class="text-xl font-semibold">42</p>
                    <p class="text-sm text-gray-500">Applicants for 6 open positions</p>
                </div>
                <hr class="border-r border-gray-500 h-6">
                <div>
                    <p class="text-lg font-semibold">5</p>
                    <p class="text-sm text-gray-500">Viewed</p>
                </div>
                <hr class="border-r border-gray-500 h-6">
                <div>
                    <p class="text-lg font-semibold">0</p>
                    <p class="text-sm text-gray-500">In Consideration</p>
                </div>
                <hr class="border-r border-gray-500 h-6">

                <div>
                    <p class="text-lg font-semibold">0</p>
                    <p class="text-sm text-gray-500">Not Selected</p>
                </div>
            </div>

            <x-button class="mt-4 w-full" href="job/apply" color="blue">
                Apply For Job</x-button>
            <hr class="my-6 border-t border-gray-500">
            <div class="mt-6">
                <h2 class="text-xl font-semibold text-white">Job Details</h2>
                <div class="mt-2 space-y-2 text-gray-300">
                    <p><span class="font-medium text-gray-400">Experience Needed:</span> 1 To 2 Years</p>
                    <p><span class="font-medium text-gray-400">Career Level:</span> Student (Undergrad / Postgrad)</p>
                    <p><span class="font-medium text-gray-400">Education Level:</span> Bachelor's Degree</p>
                    <p><span class="font-medium text-gray-400">Salary:</span> ${{ $job->salary }}/hr</p>
                    <p><span class="font-medium text-gray-400">Job Categories:</span> Customer Service/Support,
                        Operations/Management</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
