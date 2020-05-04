<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->longText("product_photo");
            $table->longText("description");
            $table->integer("amount");
            $table->double("price");
            $table->longText("information");
            $table->bigInteger("status_id")->unsigned(); // forein_key
            $table->bigInteger("category_id")->unsigned();// forein_key
            $table->bigInteger("producer_id")->unsigned();// forein_key


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
        Schema::dropIfExists('products');
    }
}
