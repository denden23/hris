<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Personal Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div x-data="{ activeTab: 'personal' }">
                    <!-- Tabs Navigation -->
                    <div class="border-b border-gray-200 dark:border-gray-700 mb-6">
                        <nav class="flex space-x-4" aria-label="Tabs">
                            <button 
                                @click="activeTab = 'personal'" 
                                :class="{ 'text-blue-500 border-blue-500': activeTab === 'personal' }" 
                                class="px-3 py-2 font-medium text-gray-700 dark:text-gray-300 border-b-2 border-transparent hover:border-gray-300">
                                Personal Information
                            </button>
                            <button 
                                @click="activeTab = 'family'" 
                                :class="{ 'text-blue-500 border-blue-500': activeTab === 'family' }" 
                                class="px-3 py-2 font-medium text-gray-700 dark:text-gray-300 border-b-2 border-transparent hover:border-gray-300">
                                Family Background
                            </button>
                            <button 
                                @click="activeTab = 'government'" 
                                :class="{ 'text-blue-500 border-blue-500': activeTab === 'government' }" 
                                class="px-3 py-2 font-medium text-gray-700 dark:text-gray-300 border-b-2 border-transparent hover:border-gray-300">
                                Government IDs
                            </button>
                            <button 
                                @click="activeTab = 'address'" 
                                :class="{ 'text-blue-500 border-blue-500': activeTab === 'address' }" 
                                class="px-3 py-2 font-medium text-gray-700 dark:text-gray-300 border-b-2 border-transparent hover:border-gray-300">
                                Address
                            </button>
                        </nav>
                    </div>

                    <!-- Form -->
                    <form action="{{ route('personal_information.store') }}" method="POST">
                        @csrf

                        <!-- Personal Information Tab -->
                        <div x-show="activeTab === 'personal'">
                             <!-- Personal Information -->
                            <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">{{ __('Personal Information') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="surname" class="block text-sm font-medium text-gray-700">Surname</label>
                                    <input type="text" name="surname" id="surname" class="mt-1 block w-full" required>
                                </div>
                                <div>
                                    <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="mt-1 block w-full" required>
                                </div>
                                <div>
                                    <label for="middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="name_extension" class="block text-sm font-medium text-gray-700">Name Extension</label>
                                    <input type="text" name="name_extension" id="name_extension" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                                    <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full" required>
                                </div>
                                <div>
                                    <label for="place_of_birth" class="block text-sm font-medium text-gray-700">Place of Birth</label>
                                    <input type="text" name="place_of_birth" id="place_of_birth" class="mt-1 block w-full" required>
                                </div>
                                <div>
                                    <label for="sex" class="block text-sm font-medium text-gray-700">Sex</label>
                                    <select name="sex" id="sex" class="mt-1 block w-full" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="civil_status" class="block text-sm font-medium text-gray-700">Civil Status</label>
                                    <select name="civil_status" id="civil_status" class="mt-1 block w-full" required>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Separated">Separated</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="height" class="block text-sm font-medium text-gray-700">Height (m)</label>
                                    <input type="number" step="0.01" name="height" id="height" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="weight" class="block text-sm font-medium text-gray-700">Weight (kg)</label>
                                    <input type="number" step="0.01" name="weight" id="weight" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="blood_type" class="block text-sm font-medium text-gray-700">Blood Type</label>
                                    <input type="text" name="blood_type" id="blood_type" class="mt-1 block w-full">
                                </div>
                            </div>

                            <!-- Contact Information -->
                            <h3 class="text-lg font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __('Contact Information') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="telephone_no" class="block text-sm font-medium text-gray-700">Telephone No</label>
                                    <input type="text" name="telephone_no" id="telephone_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="mobile_no" class="block text-sm font-medium text-gray-700">Mobile No</label>
                                    <input type="text" name="mobile_no" id="mobile_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="email_address" class="block text-sm font-medium text-gray-700">Email Address</label>
                                    <input type="email" name="email_address" id="email_address" class="mt-1 block w-full">
                                </div>
                            </div>

                            <!-- Government IDs -->
                            <h3 class="text-lg font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __('Government IDs') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="gsis_id" class="block text-sm font-medium text-gray-700">GSIS ID</label>
                                    <input type="text" name="gsis_id" id="gsis_id" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="pagibig_id" class="block text-sm font-medium text-gray-700">PAGIBIG ID</label>
                                    <input type="text" name="pagibig_id" id="pagibig_id" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="philhealth_no" class="block text-sm font-medium text-gray-700">PhilHealth No</label>
                                    <input type="text" name="philhealth_no" id="philhealth_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="sss_no" class="block text-sm font-medium text-gray-700">SSS No</label>
                                    <input type="text" name="sss_no" id="sss_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="tin_no" class="block text-sm font-medium text-gray-700">TIN No</label>
                                    <input type="text" name="tin_no" id="tin_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="agency_employee_no" class="block text-sm font-medium text-gray-700">Agency Employee No</label>
                                    <input type="text" name="agency_employee_no" id="agency_employee_no" class="mt-1 block w-full">
                                </div>
                            </div>

                            <!-- Residential Address -->
                            <h3 class="text-lg font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __('Residential Address') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="residential_lot_no" class="block text-sm font-medium text-gray-700">Lot No</label>
                                    <input type="text" name="residential_lot_no" id="residential_lot_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_street" class="block text-sm font-medium text-gray-700">Street</label>
                                    <input type="text" name="residential_street" id="residential_street" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_subdivision" class="block text-sm font-medium text-gray-700">Subdivision</label>
                                    <input type="text" name="residential_subdivision" id="residential_subdivision" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_barangay" class="block text-sm font-medium text-gray-700">Barangay</label>
                                    <input type="text" name="residential_barangay" id="residential_barangay" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="residential_city" id="residential_city" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_province" class="block text-sm font-medium text-gray-700">Province</label>
                                    <input type="text" name="residential_province" id="residential_province" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                    <input type="text" name="residential_zip_code" id="residential_zip_code" class="mt-1 block w-full">
                                </div>
                            </div>
        
                            <!-- Permanent Address -->
                            <h3 class="text-lg font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __('Permanent Address') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="permanent_lot_no" class="block text-sm font-medium text-gray-700">Lot No</label>
                                    <input type="text" name="permanent_lot_no" id="permanent_lot_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_street" class="block text-sm font-medium text-gray-700">Street</label>
                                    <input type="text" name="permanent_street" id="permanent_street" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_subdivision" class="block text-sm font-medium text-gray-700">Subdivision</label>
                                    <input type="text" name="permanent_subdivision" id="permanent_subdivision" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_barangay" class="block text-sm font-medium text-gray-700">Barangay</label>
                                    <input type="text" name="permanent_barangay" id="permanent_barangay" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="permanent_city" id="permanent_city" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_province" class="block text-sm font-medium text-gray-700">Province</label>
                                    <input type="text" name="permanent_province" id="permanent_province" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="permanent_zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                                    <input type="text" name="permanent_zip_code" id="permanent_zip_code" class="mt-1 block w-full">
                                </div>
                            </div>

             
                        </div>

                        <!-- Family Background Tab -->
                        <div x-show="activeTab === 'family'" x-cloak>
                            <!-- Family Information -->
                            <h3 class="text-lg font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __('Family Information') }}</h3>
                            <h5 class="text-sm font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __("SPOUSE'S DETAILS") }}</h5>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <!-- Spouse -->
                                <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div>
                                        <label for="spouse_surname" class="block text-sm font-medium text-gray-700">Spouse Surname</label>
                                        <input type="text" name="spouse_surname" id="spouse_surname" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="spouse_first_name" class="block text-sm font-medium text-gray-700">Spouse First Name</label>
                                        <input type="text" name="spouse_first_name" id="spouse_first_name" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="spouse_middle_name" class="block text-sm font-medium text-gray-700">Spouse Middle Name</label>
                                        <input type="text" name="spouse_middle_name" id="spouse_middle_name" class="mt-1 block w-full">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="spouse_extension_name" class="block text-sm font-medium text-gray-700">Name Extension (JR, SR)</label>
                                        <input type="text" name="spouse_extension_name" id="spouse_extension_name" class="mt-1 block w-full md:w-20">
                                    </div>
                                </div>
                                <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div>
                                        <label for="spouse_occupation" class="block text-sm font-medium text-gray-700">Spouse Occupation</label>
                                        <input type="text" name="spouse_occupation" id="spouse_occupation" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="spouse_employer" class="block text-sm font-medium text-gray-700">Employer /Business Name</label>
                                        <input type="text" name="spouse_employer" id="spouse_employer" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="spouse_business_address" class="block text-sm font-medium text-gray-700">Business Address</label>
                                        <input type="text" name="spouse_business_address" id="spouse_business_address" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="spouse_telephone_no" class="block text-sm font-medium text-gray-700">Telephone No.</label>
                                        <input type="text" name="spouse_telephone_no" id="spouse_telephone_no" class="mt-1 block w-full">
                                    </div>
                                </div>
                                
                                <!-- Father -->
                                <h5 class="text-sm font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __("FATHER'S DETAILS") }}</h5>
                                <div class="md:col-span-3 grid grid-cols-1 md:grid-cols-4 gap-4">
                                    <div>
                                        <label for="father_surname" class="block text-sm font-medium text-gray-700">Father's Surname</label>
                                        <input type="text" name="father_surname" id="father_surname" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="father_first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                                        <input type="text" name="father_first_name" id="father_first_name" class="mt-1 block w-full">
                                    </div>
                                    <div>
                                        <label for="father_middle_name" class="block text-sm font-medium text-gray-700">Middle Name</label>
                                        <input type="text" name="father_middle_name" id="father_middle_name" class="mt-1 block w-full">
                                    </div>
                                    <div class="col-span-1">
                                        <label for="father_extension_name" class="block text-sm font-medium text-gray-700">Name Extension (JR, SR)</label>
                                        <input type="text" name="father_extension_name" id="father_extension_name" class="mt-1 block w-full md:w-20">
                                    </div>
                                </div>

                            </div>
                             <!-- Mother -->
                             <h5 class="text-sm font-semibold mt-6 mb-4 text-gray-800 dark:text-gray-200">{{ __("MOTHER'S DETAILS") }}</h5>
                             <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                 <div>
                                     <label for="mother_surname" class="block text-sm font-medium text-gray-700">SURNAME</label>
                                     <input type="text" name="mother_surname" id="mother_surname" class="mt-1 block w-full">
                                 </div>
                                 <div>
                                     <label for="mother_first_name" class="block text-sm font-medium text-gray-700">FIRST NAME</label>
                                     <input type="text" name="mother_first_name" id="mother_first_name" class="mt-1 block w-full">
                                 </div>
                                 <div>
                                     <label for="mother_middle_name" class="block text-sm font-medium text-gray-700">MIDDLE NAME</label>
                                     <input type="text" name="mother_middle_name" id="mother_middle_name" class="mt-1 block w-full">
                                 </div>
                             </div>
                        </div>

                        <!-- Government IDs Tab -->
                        <div x-show="activeTab === 'government'" x-cloak>
                            <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">{{ __('Government IDs') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="gsis_id" class="block text-sm font-medium text-gray-700">GSIS ID</label>
                                    <input type="text" name="gsis_id" id="gsis_id" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="pagibig_id" class="block text-sm font-medium text-gray-700">PAGIBIG ID</label>
                                    <input type="text" name="pagibig_id" id="pagibig_id" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="philhealth_no" class="block text-sm font-medium text-gray-700">PhilHealth No</label>
                                    <input type="text" name="philhealth_no" id="philhealth_no" class="mt-1 block w-full">
                                </div>
                            </div>
                        </div>

                        <!-- Address Tab -->
                        <div x-show="activeTab === 'address'" x-cloak>
                            <h3 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">{{ __('Residential Address') }}</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div>
                                    <label for="residential_lot_no" class="block text-sm font-medium text-gray-700">Lot No</label>
                                    <input type="text" name="residential_lot_no" id="residential_lot_no" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_street" class="block text-sm font-medium text-gray-700">Street</label>
                                    <input type="text" name="residential_street" id="residential_street" class="mt-1 block w-full">
                                </div>
                                <div>
                                    <label for="residential_city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" name="residential_city" id="residential_city" class="mt-1 block w-full">
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
