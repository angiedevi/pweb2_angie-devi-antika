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
        Schema::create('etalases', function (Blueprint $table) {
            $table->id();
            $table->string('nama_karya')->nullable(false); //nullable artinya bole kosong, nullable (false) berarti gabole kosong
            $table->string('nama_kreator')->nullable(false);
            $table->string('harga_karya')->nullable(false);
            $table->string('deskripsi_karya')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etalases');
    }
};
