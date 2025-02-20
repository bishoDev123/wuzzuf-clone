<x-layout>
    <div class="flex justify-center items-center text-white">
        <div class="relative">
            <img src="{{ asset('images/woman.webp') }}" class="z-10 brightness-50 w-screen h-screen object-cover" alt="">
            <div class="absolute inset-0 flex justify-center items-center flex-col text-white mt-auto">
                <div class="text-left">
                    <h1 class="text-4xl font-bold mb-3">Find the best jobs in Egypt</h1>
                    <p class=" text-lg">Searching for vacancies & career opportunities? WUZZUF helps you in your job search in Egypt</p>
                </div>
                <div class="w-full max-w-sm min-w-[600px] mt-5">
                    <div class="relative">
                      <input
                        class="w-full bg-slate-100/50 placeholder:text-black/50 text-black text-sm border border-slate-200 rounded-md pl-3 pr-28 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                        placeholder="UI Kits, Dashboards..." 
                      />
                      <button
                        class="absolute top-1 right-1 flex items-center rounded bg-slate-800 py-1 px-2.5 border border-transparent text-center text-sm text-white transition-all shadow-sm hover:shadow focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button"
                      >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2">
                          <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                   
                        Search
                      </button> 
                    </div>
                  </div>
            </div>
            
        </div>

    </div>
    <script>
        document.querySelector("input").focus();
    </script>
</x-layout>