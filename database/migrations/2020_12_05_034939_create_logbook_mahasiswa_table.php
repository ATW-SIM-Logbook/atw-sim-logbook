<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogbookMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logbook_mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('logbook_id');
            $table->integer('mahasiswa_id');
            $table->string('kegiatan');
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
        Schema::dropIfExists('logbook_mahasiswa');
    }
}
