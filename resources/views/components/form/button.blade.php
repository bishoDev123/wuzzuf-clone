@props(['color' => 'blue', 'type' => 'submit'])

@php
$colors = [
    'blue' => 'bg-blue-700',
    'slate' => 'bg-slate-700',
];
$hovers = [
    'blue' => 'hover:bg-blue-500',
    'slate' => 'hover:bg-slate-500',
];
$bgColor = $colors[$color];
$hoverColor = $hovers[$color];
@endphp

<button :type="$type"
    {{ $attributes->merge(["class"=>"$bgColor $hoverColor text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]) }}>
    {{ $slot }}
</button>
