<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->integer('nomor_induk_siswa');
            $table->string('tempat_lahir');
            $table->dateTime('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat_siswa');
            $table->string('agama_siswa');
            $table->rapor_mata_pelajaran();
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
        Schema::dropIfExists('siswa');
    }
};
