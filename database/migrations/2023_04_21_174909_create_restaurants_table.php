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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            // pos_department.department_ch_id
            $table->string('sid')->unique();
            // pos_department.department_type_name
            $table->string('brand')->nullable();
            // pos_department.department_type_code
            $table->string('brand_code')->nullable();
            // pos_department.survey_name
            $table->string('shop')->nullable();
            // null
            $table->string('address')->nullable();
            // pos_department.area
            $table->string('location')->nullable();
            // pos_department.status
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
