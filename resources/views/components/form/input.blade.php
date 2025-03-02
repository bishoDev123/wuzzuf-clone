<div class="mb-6">
    <label class="block mb-2 font-bold text-gray-200">
        {{ $label }}
    </label>
    @if ($size == 'normal')
        <input
            class="w-full min-w-96 bg-slate-600/10 text-white p-3 border border-gray-300 rounded-md text-base transition duration-300 ease-in-out focus:border-blue-500 focus:outline-none"
            placeholder="{{ $placeholder }}" type="text" name="{{ $label }}" id="{{ $label }}" />
    @else
        <textarea
            class="w-full min-w-96 bg-slate-600/10 text-white p-3 border border-gray-300 rounded-md text-base transition duration-300 ease-in-out focus:border-blue-500 focus:outline-none"
            placeholder="{{ $placeholder }}" cols="{{ $cols }}" rows="{{ $rows }}" type="text" name="{{ $label }}" id="{{ $label }}"></textarea>
    @endif

</div>
