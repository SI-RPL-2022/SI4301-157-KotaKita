<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesan_masuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_awal');
            $table->string('nama_akhir');
            $table->integer('kota_id');
            $table->string('no_telepon');
            $table->text('pesan');
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
        Schema::dropIfExists('pesan_masuk');
    }
}
