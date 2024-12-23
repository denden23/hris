<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('personal_information')->insert([
                'surname' => $faker->lastName,
                'first_name' => $faker->firstName,
                'middle_name' => $faker->lastName,
                'name_extension' => $faker->randomElement(['Jr.', 'Sr.', 'III', null]),
                'date_of_birth' => $faker->date('Y-m-d', '-18 years'),
                'telephone_no' => $faker->optional()->phoneNumber,
                'mobile_no' => $faker->phoneNumber,
                'email_address' => $faker->optional()->safeEmail,
                'place_of_birth' => $faker->city,
                'sex' => $faker->randomElement(['Male', 'Female']),
                'civil_status' => $faker->randomElement(['Single', 'Widowed', 'Married', 'Separated', 'Others']),
                'height' => $faker->optional()->randomFloat(2, 150, 200),
                'weight' => $faker->optional()->randomFloat(2, 40, 150),
                'blood_type' => $faker->optional()->randomElement(['A', 'B', 'AB', 'O']),
                'gsis_id' => $faker->optional()->uuid,
                'pagibig_id' => $faker->optional()->uuid,
                'philhealth_no' => $faker->optional()->uuid,
                'sss_no' => $faker->optional()->uuid,
                'tin_no' => $faker->optional()->uuid,
                'agency_employee_no' => $faker->optional()->numerify('#######'),
                'citizenship' => $faker->randomElement(['Filipino', 'Dual Citizenship']),
                'citizenship_type' => $faker->optional()->randomElement(['By Birth', 'By Naturalization']),
                'citizenship_country' => $faker->optional()->country,

                // Residential Address
                'residential_lot_no' => $faker->optional()->buildingNumber,
                'residential_street' => $faker->optional()->streetName,
                'residential_subdivision' => $faker->optional()->secondaryAddress,
                'residential_barangay' => $faker->optional()->citySuffix,
                'residential_city' => $faker->city,
                'residential_province' => $faker->state,
                'residential_zip_code' => $faker->postcode,

                // Permanent Address
                'permanent_lot_no' => $faker->optional()->buildingNumber,
                'permanent_street' => $faker->optional()->streetName,
                'permanent_subdivision' => $faker->optional()->secondaryAddress,
                'permanent_barangay' => $faker->optional()->citySuffix,
                'permanent_city' => $faker->city,
                'permanent_province' => $faker->state,
                'permanent_zip_code' => $faker->postcode,

                // Spouse Information
                'spouse_surname' => $faker->optional()->lastName,
                'spouse_first_name' => $faker->optional()->firstName,
                'spouse_middle_name' => $faker->optional()->lastName,
                'spouse_extension_name' => $faker->optional()->randomElement(['Jr.', 'Sr.', 'III']),
                'spouse_occupation' => $faker->optional()->jobTitle,
                'spouse_employer' => $faker->optional()->company,
                'spouse_business_address' => $faker->optional()->address,
                'spouse_telephone_no' => $faker->optional()->phoneNumber,

                // Father's Information
                'father_surname' => $faker->optional()->lastName,
                'father_first_name' => $faker->optional()->firstName,
                'father_middle_name' => $faker->optional()->lastName,
                'father_extension_name' => $faker->optional()->randomElement(['Jr.', 'Sr.', 'III']),

                // Mother's Information
                'mother_surname' => $faker->optional()->lastName,
                'mother_first_name' => $faker->optional()->firstName,
                'mother_middle_name' => $faker->optional()->lastName,

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
