<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100);
            $table->string('lname', 100);
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->enum('gender', ['Pria', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nik', 20);
            $table->enum('role', ['admin', 'user']);
            $table->enum('agama', ['islam', 'protestan', 'katolik', 'hindu', 'buddha', 'khonghucu']);
            $table->string('pekerjaan');
            $table->enum('status_perkawinan', ['belum kawin', 'kawin', 'cerai hidup', 'cerai mati']);
            $table->string('kewarganegaraan');
            $table->text('alamat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
