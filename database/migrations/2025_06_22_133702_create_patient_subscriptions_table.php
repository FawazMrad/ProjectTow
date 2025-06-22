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
        Schema::create('patient_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscription_plan_id')->constrained('subscription_plans')->onDelete('cascade');
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('used_free_sessions')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Unique constraint to prevent duplicate subscriptions
            $table->unique(['patient_id', 'subscription_plan_id'], 'patient_subscription_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_subscriptions');
    }
};
