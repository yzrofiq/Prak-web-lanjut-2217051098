<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToJurusanTable extends Migration
{
    public function up()
    {
        Schema::table('jurusan', function (Blueprint $table) {
            $table->string('nama')->after('id'); // Menambahkan kolom 'nama'
        });
    }

    public function down()
    {
        Schema::table('jurusan', function (Blueprint $table) {
            $table->dropColumn('nama');
        });
    }
    
}
