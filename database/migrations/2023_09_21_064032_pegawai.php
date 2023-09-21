<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('pegawai')) {
            // The "users" table exists...
            Schema::create('pegawai', function (Blueprint $table) {
                $table->id();
                $table->string('nama', 50);
                $table->string('hp', 15);
                $table->string('jabatan', 20);
                $table->string('alamat', 100);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
