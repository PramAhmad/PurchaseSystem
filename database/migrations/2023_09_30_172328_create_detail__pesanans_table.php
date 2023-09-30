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
        Schema::create('detail_pesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("id_pesanan");
            $table->unsignedBigInteger("id_barang");
            $table->integer("jumlah");
            $table->integer("total_harga");
            $table->foreign("id_pesanan")->references("id")->on("pesanans");
            $table->foreign("id_barang")->references("id")->on("barangs");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail__pesanans');
    }
};
