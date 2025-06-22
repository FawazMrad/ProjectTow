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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['MONTHLY', 'YEARLY']);
            $table->decimal('price', 8, 2);
            $table->decimal('discount_percentage', 5, 2)->default(0);
            $table->integer('free_sessions_limit')->nullable();
            $table->text('description');
            $table->boolean('is_active')->default(true);
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
