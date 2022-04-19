<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyeks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto');
            $table->string('kota');
            $table->string('keterangan');
            $table->string('nilai');
            $table->timestamp('tanggal_mulai');
            $table->timestamp('tanggal_selesai');
            $table->boolean('selesai');
            $table->timestamps();
            $table->bigInteger('id_fase')->unsigned();
            $table->bigInteger('id_feedback')->unsigned();
            $table->bigInteger('id_aduan')->unsigned();
            $table->bigInteger('id_kota')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyeks');
    }
}
