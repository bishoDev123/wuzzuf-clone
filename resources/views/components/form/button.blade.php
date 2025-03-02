@props(['color' => 'red'])

<button type="submit"
    {{ $attributes->merge(["class"=>"bg-$color-500 hover:bg-$color-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"]) }}>
    {{ $slot }}
</button>
