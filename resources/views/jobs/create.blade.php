<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="{{ route('create-job') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Add the following information about the job</p>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:rounded-md focus-within:ring-gray-900 sm:max-w-md">
                                <x-form-input name="title" id="title" placeholder="Software Engineer" />
                            </div>
                        </div>
                    </x-form-field>
                </div>
                <x-form-error name="title"></x-form-error>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md focus-within:rounded-md focus-within:ring-gray-900">
                                <x-form-input name="salary" id="salary" placeholder="PKR. 100,000 per month" />
                            </div>
                        </div>
                    </x-form-field>
                </div>
                <x-form-error name="salary"></x-form-error>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Create</x-form-button>
        </div>
    </form>

</x-layout>
