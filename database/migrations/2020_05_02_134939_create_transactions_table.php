<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double("price");
            $table->longText("description");
            $table->string("full_name");

            $table->bigInteger("user_id")->unsigned();//
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

            $table->bigInteger("address_id")->unsigned();//
            $table->foreign("address_id")->references("id")->on("addresses")->onDelete("cascade");

            $table->bigInteger("product_id")->unsigned();//
            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");

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
        Schema::dropIfExists('transactions');
    }
}
