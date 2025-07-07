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
            Schema::create('attendance_logs', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
               // $table->foreignId('session_id')->nullable()->constrained('training_sessions')->onDelete('cascade');
                $table->enum('status', ['حضور', 'تأخير', 'غياب', 'تبديل']);
                $table->dateTime('check_in')->nullable();
                $table->dateTime('check_out')->nullable();
                $table->enum('user_type', ['DOCTOR', 'RECEPTIONIST']);
                $table->boolean('is_swapped')->default(false);
                $table->timestamps();

                // Composite index for efficient queries
                $table->index(['user_id', 'user_type']);
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_logs');
    }
};
