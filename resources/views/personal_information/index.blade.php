<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Personal Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                <!-- Create Button -->
                <div class="mb-6">
                    <a href="{{ route('personal_information.create') }}" class="bg-blue-500 text-red py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                        {{ __('Create Personal Information') }}
                    </a>
                </div>

                <!-- Personal Information Table -->
                <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                    <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-100 dark:bg-gray-700 text-xs uppercase text-gray-700 dark:text-gray-200">
                            <tr>
                                <th class="px-6 py-3">{{ __('Name') }}</th>
                                <th class="px-6 py-3">{{ __('Date of Birth') }}</th>
                                <th class="px-6 py-3">{{ __('Email') }}</th>
                                <th class="px-6 py-3 text-center">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personalInformation as $info)
                                <tr class="border-b hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $info->first_name }} {{ $info->surname }}</td>
                                    <td class="px-6 py-4">{{ $info->date_of_birth }}</td>
                                    <td class="px-6 py-4">{{ $info->email_address }}</td>
                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('personal_information.show', $info->personal_information_id) }}" class="text-green-600 hover:text-green-800">
                                            {{ __('View') }}
                                        </a>
                                        <a href="{{ route('personal_information.edit', $info->personal_information_id) }}" class="text-blue-600 hover:text-blue-900">
                                            {{ __('Editdgdfgdfg') }}
                                        </a>
                                        |
                                        <form action="{{ route('personal_information.destroy', $info->personal_information_id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                {{ __('Delete') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
