<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratGlobalTable extends Migration
{
    public function up()
    {
        Schema::create('surat_global', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nomor_surat', 100)->nullable();
            $table->string('jenis', 100);
            $table->boolean('approve')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat_global');
    }
}
