<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id('personal_information_id');
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('name_extension')->nullable();
            $table->date('date_of_birth');
            $table->string('telephone_no')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email_address')->nullable();
            $table->string('place_of_birth');
            $table->enum('sex', ['Male', 'Female']);
            $table->enum('civil_status', ['Single', 'Widowed', 'Married', 'Separated', 'Others']);
            $table->float('height')->nullable(); // in cm
            $table->float('weight')->nullable(); // in kg
            $table->string('blood_type')->nullable();
            $table->string('gsis_id')->nullable();
            $table->string('pagibig_id')->nullable();
            $table->string('philhealth_no')->nullable();
            $table->string('sss_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('agency_employee_no')->nullable();
            $table->enum('citizenship', ['Filipino', 'Dual Citizenship']);
            $table->enum('citizenship_type', ['By Birth', 'By Naturalization'])->nullable();
            $table->string('citizenship_country')->nullable();

            // Residential Address
            $table->string('residential_lot_no')->nullable();
            $table->string('residential_street')->nullable();
            $table->string('residential_subdivision')->nullable();
            $table->string('residential_barangay')->nullable();
            $table->string('residential_city')->nullable();
            $table->string('residential_province')->nullable();
            $table->string('residential_zip_code')->nullable();

            // Permanent Address
            $table->string('permanent_lot_no')->nullable();
            $table->string('permanent_street')->nullable();
            $table->string('permanent_subdivision')->nullable();
            $table->string('permanent_barangay')->nullable();
            $table->string('permanent_city')->nullable();
            $table->string('permanent_province')->nullable();
            $table->string('permanent_zip_code')->nullable();

            // Spouse Information
            $table->string('spouse_surname')->nullable();
            $table->string('spouse_first_name')->nullable();
            $table->string('spouse_middle_name')->nullable();
            $table->string('spouse_extension_name')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('spouse_employer')->nullable();
            $table->string('spouse_business_address')->nullable();
            $table->string('spouse_telephone_no')->nullable();

            // Father's Information
            $table->string('father_surname')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_middle_name')->nullable();
            $table->string('father_extension_name')->nullable();

            // Mother's Information
            $table->string('mother_surname')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_middle_name')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
