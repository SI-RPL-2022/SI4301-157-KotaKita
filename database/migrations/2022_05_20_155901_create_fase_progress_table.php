<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaseProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fase_progress', function (Blueprint $table) {
            $table->id();
            $table->integer('fase_id');
            $table->string('judul_progress');
            $table->text('deskripsi_singkat')->nullable();
            $table->bigInteger('pengeluaran');
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
        Schema::dropIfExists('fase_progress');
    }
}
