<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumumen', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_ujian')->nullable();
            $table->string('username')->nullable()->unique();
            $table->string('password')->nullable();
            $table->string('token')->nullable();
            $table->string('url')->nullable();
            $table->integer('soal_benar')->nullable();
            $table->integer('soal_salah')->nullable();
            $table->integer('nilai')->nullable();
            $table->string('hasil')->nullable();
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
        Schema::dropIfExists('pengumumen');
    }
}
