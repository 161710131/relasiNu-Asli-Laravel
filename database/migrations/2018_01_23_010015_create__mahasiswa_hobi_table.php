<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaHobiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Mahasiswa_hobi', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('id_mahasiswa');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('CASCADE');
            $table->unsignedInteger('id_hobi');
            $table->foreign('id_hobi')->references('id')->on('hobi')->onDelete('CASCADE');

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
        Schema::dropIfExists('Mahasiswa_hobi');
    }
}
