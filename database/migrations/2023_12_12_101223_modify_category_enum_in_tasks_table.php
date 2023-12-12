<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            // '食安及5S','清潔檢查','餐點採樣','食安及5S複稽'
            DB::statement("ALTER TABLE tasks MODIFY COLUMN category ENUM('食安及5S','清潔檢查','餐點採樣','食安及5S複稽') NOT NULL DEFAULT '食安及5S';");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            DB::statement("ALTER TABLE tasks MODIFY COLUMN category ENUM('食安及5S','清潔檢查','餐點採樣') NOT NULL DEFAULT '食安及5S';");
        });
    }
};
