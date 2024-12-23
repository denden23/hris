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
        Schema::create('voluntary_work', function (Blueprint $table) {
            $table->id('voluntary_work_id');
            $table->unsignedBigInteger('personal_information_id'); // Foreign key
            $table->string('organization_name');
            $table->string('organization_address');
            $table->date('date_from');
            $table->date('date_to')->nullable(); // Nullable for ongoing voluntary work
            $table->integer('number_of_hours')->nullable(); // Nullable in case hours are not recorded
            $table->string('position')->nullable(); // Position held (nullable if no formal title)
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
        Schema::dropIfExists('voluntary_work');
    }
};
