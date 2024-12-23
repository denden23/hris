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
        Schema::create('educational_background', function (Blueprint $table) {
            $table->id('education_id');
            $table->unsignedBigInteger('personal_information_id'); // Foreign key
            $table->enum('level', ['ELEMENTARY', 'SECONDARY', 'VOCATIONAL', 'COLLEGE', 'GRADUATE STUDIES']);
            $table->string('school_name');
            $table->string('degree_course')->nullable(); // Basic education/degree/course
            $table->year('period_from')->nullable();
            $table->year('period_to')->nullable();
            $table->string('units_earned')->nullable();
            $table->year('year_graduated')->nullable();
            $table->string('scholarship_honors')->nullable(); // Scholarship/academic honors received
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
        Schema::dropIfExists('educational_background');
    }
};
