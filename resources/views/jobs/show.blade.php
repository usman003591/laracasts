<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg my-4 tracking-tight text-gray-900">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} monthly
    </p>

    <p class="mt-5">
        <a href="/jobs/{{ $job->id }}/edit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
    </p>
</x-layout>