<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrderIdAndTotalpriceToCatproducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cartproducts', function (Blueprint $table) {
            $table->text('order_id')->after('id');
            $table->text('totalprice')->after('product_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cartproducts', function (Blueprint $table) {
            $table->dropColumn('order_id');
            $table->dropColumn('totalprice');
        });
    }
}
