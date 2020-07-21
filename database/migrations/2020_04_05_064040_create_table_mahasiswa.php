<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablemahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nim', 4)->unique();
            $table->string('nama', 30);
            $table->string('alamat', 50);
            $table->enum('jenis_kelamin',['L', 'P']);
            $table->string('prodi', 30);
            $table->string('jurusan', 30);
            $table->string('kelas', 30);
            $table->string('angkatan', 30);
           
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
        Schema::dropIfExists('mahasiswa');
    }
}
