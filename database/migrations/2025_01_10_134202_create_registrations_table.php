<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama pendaftar
            $table->string('email'); // Email pendaftar
            $table->string('phone'); // Nomor telepon
            $table->string('program'); // Program studi yang dipilih
            $table->text('message')->nullable(); // Pesan tambahan (opsional)
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}