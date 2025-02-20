<html lang="en">

<head>
    <meta charset="wUTF-8">
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/src/styles.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="fixed left-0 right-0 mx-auto z-20">
        <x-nav-bar {{ $attributes }}>
            <a href="/">
                <img src="{{ asset('images/wuzzuf-logo.jpg.png') }}" alt="" class="w-40 h-auto">
            </a>
            <ul class="flex space-x-4 mr-auto ml-4">
                <x-button href="/jobs">Browse Jobs <img src="{{ asset('images/down-chevron.png') }}" alt=""
                        class="inline-block w-4 h-4"></x-button>
                <x-button href="/create">Post a job</x-button>
            </ul>
            <img class="w-10 h-10 rounded-full" src="https://picsum.photos/200/300" alt="Rounded avatar">
        </x-nav-bar>
    </div>
    {{ $slot }}
</body>

</html>
