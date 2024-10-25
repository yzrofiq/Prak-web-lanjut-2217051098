<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('foto')->nullable(); // Menambahkan kolom 'foto' pada tabel 'users' dan bersifat opsional
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('foto'); // Menghapus kolom 'foto' jika migrasi di-rollback
        });
    }
};
