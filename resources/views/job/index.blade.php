<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body class=" bg-zinc-950 mb-5">
    <div>
        <x-layout blur="" bgColor="bg-slate-900">

        </x-layout>
    </div>
    <br>
    <div class="mt-20 flex flex-col mx-10 gap-5 width-full">
        @foreach ($jobs as $job)
            <x-card title="{{ $job->title }}" description="{{ $job->description }}" href="/jobs/{{ $job->id }}" />
        @endforeach
    </div>
</body>

</html>
