<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusan', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('nama_jurusan'); // Kolom nama_jurusan sebagai string
            $table->foreignId('fakultas_id')->constrained('fakultas')->onDelete('cascade'); // Kolom fakultas_id sebagai foreign key yang merujuk ke tabel fakultas
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurusan');
    }
}
