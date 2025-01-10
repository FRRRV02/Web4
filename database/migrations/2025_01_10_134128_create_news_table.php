<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Judul berita
            $table->text('content'); // Isi berita
            $table->string('image')->nullable(); // Path gambar berita (opsional)
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}