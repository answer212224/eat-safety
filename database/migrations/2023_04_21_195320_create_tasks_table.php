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
            $table->enum('category', ['食安及5S', '清潔檢查', '餐點採樣']);
            $table->dateTime('task_date');
            $table->enum('status', ['pending', 'processing', 'pending_approval', 'completed'])->default('pending');
            $table->string('inner_manager')->nullable();
            $table->string('outer_manager')->nullable();
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
