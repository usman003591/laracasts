<x-layout>
    <x-slot:heading>
        Register User
    </x-slot:heading>

    <form method="POST" action="">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                    <x-form-field>
                        <div class="relative sm:max-w-md">
                            <input name="name" id="name" required
                                class="block flex-1 px-3 py-1.5 pb-2.5 pt-3 w-full text-sm ring-1 text-gray-900 bg-transparent rounded-lg border-0 ring-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-600 peer"
                                placeholder=" " />
                            <label for="name"
                                class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-100 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">Full
                                Name</label>
                        </div>

                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-gray-300 focus-within:rounded-md focus-within:ring-gray-900 sm:max-w-md">
                                <x-form-input />
                            </div>
                            <x-form-error name='name'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md focus-within:rounded-md focus-within:ring-gray-900">
                                <x-form-input name="email" id="email" required />
                            </div>
                            <x-form-error name='email'></x-form-error>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md focus-within:rounded-md focus-within:ring-gray-900">
                                <x-form-input name="password" id="password" required />
                            </div>
                            <x-form-error name='password'></x-form-error>
                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md focus-within:rounded-md focus-within:ring-gray-900">
                                <x-form-input name="password_confirmation" id="password_confirmation" required />
                            </div>
                            <x-form-error name='password_confirmation'></x-form-error>
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Create</x-form-button>
        </div>
    </form>

</x-layout>