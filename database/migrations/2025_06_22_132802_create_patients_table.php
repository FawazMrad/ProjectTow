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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->nullable()->constrained('families')->onDelete('set null');
            $table->foreignId('medical_study_id')->nullable()->constrained('medical_studies')->onDelete('set null');
            $table->string('phone')->nullable();
            $table->enum('gender', ['MALE', 'FEMALE']);
            $table->text('allergies')->nullable();
            $table->string('full_name');
            $table->integer('points')->default(0);
            $table->boolean('is_study_volunteer')->default(false);
            $table->date('birth_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
