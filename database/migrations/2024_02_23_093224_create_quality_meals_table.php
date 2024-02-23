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
        Schema::create('quality_meals', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date');
            $table->string('sid');
            $table->string('brand');
            $table->string('shop')->nullable();
            $table->string('category');
            $table->string('chef');
            $table->string('workspace');
            $table->string('qno');
            $table->string('name');
            $table->string('note')->nullable();
            $table->string('item');
            $table->string('items');
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
        Schema::dropIfExists('quality_meals');
    }
};
