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
        Schema::create('task_has_clear_defects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('task_id');
            $table->foreignId('clear_defect_id');
            $table->foreignId('restaurant_workspace_id');
            $table->json('description');
            $table->json('images');
            $table->integer('amount')->default(0);
            $table->string('memo')->nullable();
            $table->boolean('is_ignore')->default(false);
            $table->boolean('is_impoved')->default(false);
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
        Schema::dropIfExists('task_has_clear_defects');
    }
};
