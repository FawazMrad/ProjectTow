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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('family_id')->nullable()->constrained('families')->onDelete('set null');
            $table->foreignId('patient_id')->nullable()->constrained('patients')->onDelete('set null');
            $table->foreignId('patient_subscription_id')->nullable()->constrained('patient_subscriptions')->onDelete('set null');
            $table->enum('payment_status', ['مدفوع', 'غير مدفوع', 'جزئي'])->default('غير مدفوع');
            $table->decimal('remain_amount', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->boolean('is_family_bill')->default(false);
            $table->decimal('bill_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
