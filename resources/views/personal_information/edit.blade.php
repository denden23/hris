<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Personal Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('personal_information.update', $personalInformation->personal_information_id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Surname -->
                    <div class="mb-4">
                        <label for="surname" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Surname') }}
                        </label>
                        <input type="text" name="surname" id="surname" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->surname }}" required>
                    </div>

                    <!-- First Name -->
                    <div class="mb-4">
                        <label for="first_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('First Name') }}
                        </label>
                        <input type="text" name="first_name" id="first_name" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->first_name }}" required>
                    </div>

                    <!-- Middle Name -->
                    <div class="mb-4">
                        <label for="middle_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Middle Name') }}
                        </label>
                        <input type="text" name="middle_name" id="middle_name" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->middle_name }}">
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-4">
                        <label for="date_of_birth" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Date of Birth') }}
                        </label>
                        <input type="date" name="date_of_birth" id="date_of_birth" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->date_of_birth }}" required>
                    </div>

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email_address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Email Address') }}
                        </label>
                        <input type="email" name="email_address" id="email_address" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->email_address }}">
                    </div>

                    <!-- Mobile Number -->
                    <div class="mb-4">
                        <label for="mobile_no" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            {{ __('Mobile Number') }}
                        </label>
                        <input type="text" name="mobile_no" id="mobile_no" class="block mt-1 w-full rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-gray-200" value="{{ $personalInformation->mobile_no }}">
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                            {{ __('Update') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
