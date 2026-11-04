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
       Schema::create('cv', function (Blueprint $table) {
        $table->increments('cv_id');
        $table->string('nama_lengkap', 150);
        $table->string('nim', 20);
        $table->string('prodi', 100);
        $table->string('email', 100);
        $table->string('no_hp', 20)->nullable();
        $table->text('keahlian')->nullable();
        $table->text('tentang_saya')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cv');
    }
};
