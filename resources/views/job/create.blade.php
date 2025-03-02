<body class="bg-zinc-950 mb-5">
    <div>
        <x-layout blur="" bgColor="bg-slate-900">
        </x-layout>
    </div>
    <br>
    <form method="POST" action="/jobs" class="flex flex-col justify-center items-center mt-20">
        @csrf
        <h1 class="text-white text-4xl mb-10">Post New Job</h1>
        <x-form.input name="title" size="normal" label="title" placeholder="Enter job title" />
        <x-form.input name="description" size="large" label="description" cols="50" rows="10" placeholder="Enter job description" />
        <x-form.input name="salary" size="normal" label="Salary" placeholder="Enter job salary" />
        <div class="flex gap-10">
            <x-form.button color="slate">Cancel</x-form.button>
            <x-form.button color="blue" type="submit">Submit</x-form.button>
        </div>
    </form>
</body>
