<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture');
            $table->integer('qty');
            $table->double('unit_price');
            $table->double('total_price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id');
            // $table->foreign('product_id')->references('id')->on('products')->OnDelete('cascade');

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
        Schema::dropIfExists('carts');
    }
}
