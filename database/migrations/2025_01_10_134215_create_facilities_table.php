<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama fasilitas
            $table->text('description'); // Deskripsi fasilitas
            $table->string('image')->nullable(); // Path gambar fasilitas (opsional)
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}