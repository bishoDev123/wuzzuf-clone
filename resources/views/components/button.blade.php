@props(['color' => 'blue'])

<button {{$attributes->merge(['class'=> "bg-$color-600 text-white py-2 rounded-lg font-semibold hover:bg-$color-700"])}}>{{ $slot }}</button>