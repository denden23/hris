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
        Schema::create('training_program', function (Blueprint $table) {
            $table->id('training_program_id');
            $table->unsignedBigInteger('personal_information_id'); // Foreign key
            $table->string('training_title');
            $table->integer('number_of_hours')->nullable(); // Nullable in case hours are not recorded
            $table->string('training_venue')->nullable(); // Venue may be optional
            $table->string('conducted_by')->nullable(); // Organization or person conducting the training
            $table->date('date_from');
            $table->date('date_to')->nullable(); // Nullable for ongoing training programs
            $table->enum('type_of_learning_development', ['Managerial', 'Supervisory', 'Technical', 'Others']);
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
        Schema::dropIfExists('training_program');
    }
};
