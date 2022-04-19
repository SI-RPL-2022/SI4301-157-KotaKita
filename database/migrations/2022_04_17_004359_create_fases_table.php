<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fases', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->timestamp('tanggal_mulai');
            $table->timestamp('tanggal_selesai');
            $table->boolean('selesai');
            $table->timestamps();
            $table->bigInteger('id_dokumen')->unsigned();
            $table->bigInteger('id_proyek')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fases');
    }
}
