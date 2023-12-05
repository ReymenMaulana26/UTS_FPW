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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_barang');
            $table->string('nama_barang');
            $table->string('jenis_varian');
            $table->integer('qty');
            $table->decimal('harga_jual', 8, 2);
            $table->integer('total_harga');
            $table->integer('potongan_harga');
            $table->integer('harga_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
