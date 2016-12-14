<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcomments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('name');
            $table->text('body');
            $table->integer('rating')->nullable();
            $table->string('visibility');
            $table->integer('product_id')->nullable()->unsigned();
            $table->timestamps();
        });

        Schema::table('pcomments', function ($table) {
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('product_id');
        Schema::dropIfExists('pcomments');
    }
}
