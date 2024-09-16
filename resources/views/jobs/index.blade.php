<x-layout>
    <x-slot:heading>
        <div class="flex justify-between">
            Jobs Listings
            <div class="flex">
                <p class="text-xl font-bold pt-1 tracking-tight">Create Job</p>
                <a href="/jobs/create" class="text-gray-800 hover:text-gray-600 px-3">
                    <i class="fa-regular fa-square-plus"></i>
                </a>
            </div>
        </div>
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}">
            <li class="mb-3 rounded-lg bg-white p-5 text-gray-900 shadow hover:bg-gray-800 hover:text-gray-300">
                <p class="pb-2 text-lg font-bold tracking-tight">{{ $job->employer->name }}</p>
                <p class="text-sm tracking-tight">{{ $job['title'] }}</p>
            </li>
        </a>
        @endforeach
    </ul>
    <div>{{ $jobs->links() }}</div>
</x-layout>