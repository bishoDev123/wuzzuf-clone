<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body class=" bg-zinc-950">
    <div>
        <x-layout blur="" bgColor="bg-slate-900">

        </x-layout>
    </div>
    <br>
    <div class="mt-20 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 ml-10">
        @foreach ($jobs as $job)
            <x-card title="{{ $job->title }}" description="{{ $job->description }}" />
        @endforeach
    </div>
</body>

</html>
