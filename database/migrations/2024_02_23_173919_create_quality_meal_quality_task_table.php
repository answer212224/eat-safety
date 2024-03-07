<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_meal_quality_task', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quality_meal_id')->constrained()->onDelete('cascade');
            $table->foreignId('quality_task_id')->constrained()->onDelete('cascade');
            $table->boolean('is_improved')->default(false);
            $table->boolean('is_taken')->default(false);
            $table->string('memo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_meal_quality_task');
    }
};
