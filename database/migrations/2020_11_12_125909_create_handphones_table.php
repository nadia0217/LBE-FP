<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHandphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handphones', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->bigIncrements('id');
            $table->string('nama_barang');
            $table->string('brand');
            $table->integer('stok');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->string('image_url');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('handphones');
    }
}
