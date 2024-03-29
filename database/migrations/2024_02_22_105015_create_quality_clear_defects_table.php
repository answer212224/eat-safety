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
        Schema::create('quality_clear_defects', function (Blueprint $table) {
            $table->id();
            $table->date('effective_date')->comment('啟用月份');
            $table->string('main_item')->comment('主項目');
            $table->string('sub_item')->comment('次項目');
            $table->integer('deduct_point')->default(-2)->comment('扣分');
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
        Schema::dropIfExists('quality_clear_defects');
    }
};
