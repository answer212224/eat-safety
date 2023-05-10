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
        Schema::create('task_has_defects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id');
            $table->foreignId('restaurant_workspace_id');
            $table->foreignId('defect_id');
            $table->string('image_0');
            $table->string('image_1')->nullable();
            $table->boolean('is_improved')->default(false);
            $table->string('group')->nullable();
            $table->string('title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_has_defects');
    }
};
