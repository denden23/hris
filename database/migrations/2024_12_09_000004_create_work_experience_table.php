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
        Schema::create('work_experience', function (Blueprint $table) {
            $table->id('work_experience_id');
            $table->unsignedBigInteger('personal_information_id'); // Foreign key
            $table->date('date_from');
            $table->date('date_to')->nullable(); // Nullable for current employment
            $table->string('position_title');
            $table->string('agency');
            $table->string('appointment_status');
            $table->decimal('monthly_salary', 10, 2)->nullable(); // Nullable in case salary is not disclosed
            $table->string('salary_grade')->nullable(); // Nullable if not applicable
            $table->enum('government_service', ['Yes', 'No']);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('personal_information_id')
                ->references('personal_information_id')
                ->on('personal_information')
                ->onDelete('cascade'); // Cascade on delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experience');
    }
};
