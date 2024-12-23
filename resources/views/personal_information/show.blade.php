<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Personal Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">{{ __('Personal Information Details') }}</h3>

                <div class="mb-4">
                    <strong>{{ __('Name:') }}</strong>
                    <span>{{ $personalInformation->first_name }} {{ $personalInformation->surname }}</span>
                </div>
                <div class="mb-4">
                    <strong>{{ __('Date of Birth:') }}</strong>
                    <span>{{ $personalInformation->date_of_birth }}</span>
                </div>
                <div class="mb-4">
                    <strong>{{ __('Email:') }}</strong>
                    <span>{{ $personalInformation->email_address }}</span>
                </div>

                <div class="mt-6">
                    <a href="{{ route('personal_information.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                        {{ __('Back to List') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
