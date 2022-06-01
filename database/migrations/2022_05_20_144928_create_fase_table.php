<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fase', function (Blueprint $table) {
            $table->id();
            $table->string('nama_fase');
            $table->integer('proyek_id');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->bigInteger('estimasi_pendanaan');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('fase');
    }
}
