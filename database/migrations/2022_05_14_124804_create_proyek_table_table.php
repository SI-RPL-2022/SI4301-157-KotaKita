<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->id();
            $table->string('nama_proyek');
            $table->string('type');
            $table->text('keterangan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir')->nullable();
            $table->string('logo')->nullable();
            $table->string('gambar')->nullable();
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
        Schema::dropIfExists('proyek_table');
    }
}
