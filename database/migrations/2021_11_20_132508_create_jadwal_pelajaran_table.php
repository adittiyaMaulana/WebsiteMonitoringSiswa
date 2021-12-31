<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_siswa');
            $table->unsignedBigInteger('id_mapel');
            $table->foreign('id_siswa')->references('id')->on('profil_siswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_mapel')->references('id')->on('mata_pelajaran')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('jam_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_pelajaran');
    }
}
