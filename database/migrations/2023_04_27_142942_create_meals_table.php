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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('effective_date');
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
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
