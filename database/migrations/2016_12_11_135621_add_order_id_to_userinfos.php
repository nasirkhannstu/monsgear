<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderIdToUserinfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userinfos', function (Blueprint $table) {
            $table->text('order_id')->nullable()->after('userId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userinfos', function (Blueprint $table) {
            $table->dropColumn('order_id');
        });
    }
}
