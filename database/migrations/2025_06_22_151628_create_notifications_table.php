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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade'); //for the receiver if it's not a receptionist
            $table->foreignId('sender_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->foreignId('patient_id')->nullable()->constrained('patients')->onDelete('set null');
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->onDelete('set null');
            $table->string('title');
            $table->text('body');
            $table->enum('channel', ['IN_APP', 'SMS', 'WHATSAPP', 'CALL']);
            $table->enum('status', ['تم الارسال','انتظار', 'فشل الارسال'])->default('انتظار');
            $table->boolean('is_scheduled')->default(false);
            $table->boolean('is_reception_notification')->default(false);
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();


            $table->index(['user_id', 'status']);
            $table->index(['patient_id', 'channel']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
