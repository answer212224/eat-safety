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
        Schema::create('quality_task_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quality_task_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('is_completed')->default(false);
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
        Schema::table('quality_task_user', function (Blueprint $table) {
            $table->dropForeign(['quality_task_id']);
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('quality_task_user');
    }
};
