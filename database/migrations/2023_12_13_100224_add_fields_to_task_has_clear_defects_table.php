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
        Schema::table('task_has_clear_defects', function (Blueprint $table) {
            // 是否未達扣分標準
            $table->boolean('is_not_reach_deduct_standard')->default(false)->after('memo');
            // 是否建議事項
            $table->boolean('is_suggestion')->default(false)->after('is_not_reach_deduct_standard');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_has_clear_defects', function (Blueprint $table) {
            $table->dropColumn('is_not_reach_deduct_standard');
            $table->dropColumn('is_suggestion');
        });
    }
};
