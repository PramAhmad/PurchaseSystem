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
        Schema::create('riwayat_transaksi', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("id_pesanan");
            $table->unsignedBigInteger("id_pembayaran");
            $table->integer("jumlah_transaksi");
            $table->foreign("id_pembayaran")->references("id")->on("pembayarans");
            $table->foreign("id_pesanan")->references("id")->on("pesanans");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksi');
    }
};
