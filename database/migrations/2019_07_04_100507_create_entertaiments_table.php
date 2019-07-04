<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntertaimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertaiments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('nama_jasa');
            $table->string('deskripsi');
            $table->string('slogan');
            $table->string('harga');
            $table->string('alamat');
            $table->string('notlp');
            $table->string('email');
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
        Schema::dropIfExists('entertaiments');
    }
}
