<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="PATCH" action="{{ route('update-job') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:rounded-md focus-within:ring-gray-900 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 placeholder:text-gray-400 focus:outline-none sm:text-sm sm:leading-6 text-slate-600"
                                    placeholder="Software Engineer" value="{{ $job->title }}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @error('title')
                <small class="text-red-600">{{ $message }}</small>
                @enderror --}}

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md focus-within:rounded-md focus-within:ring-gray-900">
                                <input type="text" name="salary" id="salary"
                                    class="block flex-1 border-0 bg-transparent px-3 py-1.5 text-slate-600 placeholder:text-gray-400 focus:outline-none sm:text-sm sm:leading-6"
                                    placeholder="PKR. 100,000 per month" value="{{ $job->salary }}">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @error('salary')
                <small class="text-red-600">{{ $message }}</small>
                @enderror --}}
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline
                focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Cancel</a>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
    </form>

</x-layout>