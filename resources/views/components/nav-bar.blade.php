@props(['blur' => 'backdrop-blur-sm', 'bgColor' => 'bg-gray-800/10'])

<nav class="flex justify-between items-center mt-auto p-4 text-white mx-auto {{ $blur }} {{ $bgColor }}">
    {{ $slot }}</nav>
