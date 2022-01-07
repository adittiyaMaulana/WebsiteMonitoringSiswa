<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_guru', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_kelas');
            $table->unsignedBigInteger('id_mapel');
            $table->unsignedBigInteger('id_guru');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_mapel')->references('id')->on('mata_pelajaran')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('cascade')->onUpdate('cascade');
            $table->string('hari');
            $table->string('jam_pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_guru');
    }
}
