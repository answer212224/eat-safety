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
        Schema::create('defects', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date')->comment('啟用月份');
            $table->string('group')->comment('缺失分類');
            $table->string('title')->comment('子項目');
            $table->string('category')->comment('缺失類別');
            $table->string('description')->comment('稽核標準');
            $table->integer('deduct_point')->comment('扣分');
            $table->string('report_description')->comment('報告呈現說明');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('defects');
    }
};
