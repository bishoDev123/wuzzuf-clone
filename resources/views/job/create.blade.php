<body class="bg-zinc-950 mb-5">
    <div>
        <x-layout blur="" bgColor="bg-slate-900">
    
        </x-layout>
    </div>
    <br>
    <form method="POST" class="flex flex-col justify-center items-center mt-20">
        @csrf
        <h1 class="text-white text-4xl mb-10">Post New Job</h1>
        <x-form.input size="normal" label="Title" placeholder="Enter job title" />
        <x-form.input size="large" label="Description" cols="50" rows="10" placeholder="Enter job Description" />
        <div class="flex gap-10">
            <x-form.button color="slate">Cancel</x-form.button>
            <x-form.button color="blue" type="" onclick="/">Submit</x-form.button>
        </div>
    </form>
</body> 