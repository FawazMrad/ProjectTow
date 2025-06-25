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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receptionist_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('parent_appointment_id')->nullable()->constrained('appointments')->onDelete('set null');
            $table->foreignId('bill_id')->nullable()->constrained('bills')->onDelete('set null');
            $table->foreignId('medical_study_id')->nullable()->constrained('medical_studies')->onDelete('set null');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->text('notes')->nullable();
            $table->enum('status', [
                'معلق', 'مقبول', 'مؤجل', 'مرفوض',
                'كامل', 'غياب', 'تم التخلي'
            ])->default('معلق');
            $table->enum('type', [
                'علاجي', 'تنضيف', 'تجميل', 'أطفال', 'دراسة طبية'
            ])->nullable();
            $table->timestamps();

            // Indexes for efficient querying
            $table->index(['doctor_id', 'start_time', 'end_time']);
            $table->index(['patient_id', 'start_time']);
            $table->index('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
