<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['DOCTOR', 'RECEPTIONIST', 'TRAINEE']);
            $table->string('college')->nullable();
            $table->string('specialization')->nullable();
            $table->string('qr_code')->nullable();
            $table->boolean('is_accepted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
