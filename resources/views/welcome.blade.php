<x-layout>
    <div class="flex justify-center items-center text-white">
        <div class="relative">
            <img src="{{ asset('images/woman.webp') }}" class="z-10 brightness-50 w-screen h-screen object-cover" alt="">
            <div class="absolute inset-0 flex justify-center items-center flex-col text-white mt-auto">
                <div class="text-left">
                    <h1 class="text-4xl font-bold mb-3">Find the best jobs in Egypt</h1>
                    <p class=" text-lg">Searching for vacancies & career opportunities? WUZZUF helps you in your job search in Egypt</p>
                </div>
                <input type="text" class="shadow appearance-none border rounded w-96 py-2 px-3 text-gray-700 leading-tight focus:outline-double focus:outline-sky-600 focus:shadow-outline mt-5" placeholder="Search for jobs">
            </div>
            
        </div>

    </div>
    <script>
        document.querySelector("input").focus();
    </script>
</x-layout>