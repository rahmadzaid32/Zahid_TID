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
        Schema::create('portofolio_1202', function (Blueprint $table) {
        $table->increments('portofolio_id');
        $table->string('judul_proyek', 150);
        $table->text('deskripsi');
        $table->string('kategori', 50);
        $table->string('link_proyek')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio1202s');
    }
};
