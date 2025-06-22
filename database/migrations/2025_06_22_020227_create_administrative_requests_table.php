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
        Schema::create('administrative_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requester_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('training_session_id')->nullable()->constrained('training_sessions')->onDelete('cascade');
            $table->foreignId('target_user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->enum('status', ['PENDING', 'APPROVED', 'REJECTED'])->default('PENDING');
            $table->dateTime('date_requested');
            $table->text('description');
            $table->enum('type', ['ABSENT', 'SHIFT_SWAP']);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrative_requests');
    }
};
