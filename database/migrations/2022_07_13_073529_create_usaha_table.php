<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaTable extends Migration
{
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nomor_surat', 100)->nullable();
            $table->string('nama', 200);
            $table->string('jenis', 200);
            $table->text('tempat');
            $table->text('pemasaran');
            $table->string('tahun_berdiri');
            $table->boolean('approve')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('usaha');
    }
}
