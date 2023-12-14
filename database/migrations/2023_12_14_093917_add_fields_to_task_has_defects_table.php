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
        Schema::table('task_has_defects', function (Blueprint $table) {
            // 是否重複
            $table->boolean('is_repeat')->default(false)->after('is_suggestion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_has_defects', function (Blueprint $table) {
            $table->dropColumn('is_repeat');
        });
    }
};
