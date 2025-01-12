<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->string('name'); // Nama pengirim
                $table->string('email'); // Email pengirim
                $table->text('message'); // Isi pesan
                $table->timestamps(); // Kolom created_at & updated_at
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
