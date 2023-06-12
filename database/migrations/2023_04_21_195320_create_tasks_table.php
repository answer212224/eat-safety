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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id');
            $table->string('category');
            $table->dateTime('task_date');
            $table->enum('status', ['pending', 'processing', 'pending_approval', 'completed'])->default('pending');
            $table->string('inner_manager')->nullable();
            $table->string('outer_manager')->nullable();
            $table->integer('total')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
