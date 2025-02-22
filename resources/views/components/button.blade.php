@props(['color' => 'blue', 'href' => '#'])

<a href="{{ $href }}" {{$attributes->merge(['class'=> "inline-block bg-$color-600 text-white py-2 px-4 rounded-lg font-semibold hover:bg-$color-700 text-center"])}}>{{ $slot }}</a>
