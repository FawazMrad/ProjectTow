<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preventive_care_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->text('description');
            $table->date('start_date');
            $table->dateTime('next_check_date');
            $table->integer('reminder_interval')->comment('In months');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Index for efficient querying
            $table->index(['patient_id', 'next_check_date']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preventive_care_plans');
    }
};
