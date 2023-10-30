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
        Schema::table('restaurant_workspaces', function (Blueprint $table) {
            // add status column bool
            $table->boolean('status')->default(1)->after('area');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurant_workspaces', function (Blueprint $table) {
            // drop status column
            $table->dropColumn('status');
        });
    }
};
