<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematiansTable extends Migration
{
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nomor_surat', 100)->nullable();
            $table->string('nama', 200);
            $table->string('nik', 16);
            $table->string('tempat_lahir', 150);
            $table->string('tanggal_lahir', 100);
            $table->text('alamat', 16);
            $table->string('hari', 100);
            $table->string('jam', 100);
            $table->string('tanggal', 100);
            $table->text('daerah');
            $table->text('sebab');
            $table->text('tempat_makam');
            $table->string('hari_makam', 100);
            $table->string('jam_makam', 100);
            $table->string('tanggal_makam', 100);
            $table->boolean('approve')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kematian');
    }
}
