<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolekcineMonetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolekcine_monetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('coin_id');
            $table->string('title');
            $table->text('description');
            $table->boolean('colected')->default(false);
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
        Schema::dropIfExists('kolekcine_monetas');
    }
}
