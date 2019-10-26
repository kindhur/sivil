<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_pt');
            $table->string('nama_pt');
            $table->string('kodeprodi');
            $table->string('program_studi');
            $table->string('nama_mahasiswa');
            $table->string('nim')->unique();
            $table->string('no_ijazah')->unique();
            $table->date('tgl_lulus');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificates');
    }
}
