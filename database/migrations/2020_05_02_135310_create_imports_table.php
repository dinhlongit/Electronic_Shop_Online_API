<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->default("Hoa Don");
            $table->date('import_date');
            $table->bigInteger('user_id')->unsigned();//
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->bigInteger('supplier_id')->unsigned();//
            $table->foreign("supplier_id")->references("id")->on("suppliers")->onDelete("cascade");
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
        Schema::dropIfExists('imports');
    }
}
