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
        Schema::create('character_references', function (Blueprint $table) {
            $table->id('character_reference_id');
            $table->unsignedBigInteger('personal_information_id'); // Foreign key to personal_information table
            $table->string('full_name'); // Full name of the character reference
            $table->string('address'); // Address of the character reference
            $table->string('telephone_no')->nullable(); // Telephone number of the character reference
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('personal_information_id')
                ->references('personal_information_id')
                ->on('personal_information')
                ->onDelete('cascade'); // Deletes character references when personal_information record is deleted
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('character_references');
    }
};
