@props(['title', 'description'])

<div
    class="block p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:outline-solid dark:hover:border-solid dark:bg-gray-800/50 dark:border-gray-700 dark:hover:border-blue-600 transition duration-150">
    <a {{ $attributes }}>
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-600 transition duration-150">
            {{ $title }}
        </h5>
    </a>
    <p class="font-normal text-gray-700 dark:text-gray-400">{{ $description }}</p>
</div>
