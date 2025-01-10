<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama program studi
            $table->text('description'); // Deskripsi program studi
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('programs');
    }
}