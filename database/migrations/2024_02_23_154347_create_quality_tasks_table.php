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
        Schema::create('quality_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id');
            $table->enum('category', ['食安巡檢', '清潔檢查', '食材/成品採樣', '原料驗收查核', '製程巡檢']);
            $table->dateTime('task_date');
            $table->enum('status', ['pending', 'processing', 'pending_approval', 'completed'])->default('pending');
            $table->string('inner_manager')->nullable();
            $table->string('outer_manager')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
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
        Schema::dropIfExists('quality_tasks');
    }
};
