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
        Schema::create('pembelian_panens', function (Blueprint $table) {
            $table->id();
            $table->string('faktur')->unique();
            $table->foreignId('varietas_id')->constrained();
            $table->foreignId('petani_id')->constrained();
            $table->foreignId('kondisi_panen_id')->constrained();
            $table->foreignId('rafaksi_id')->constrained();
            $table->foreignId('tarif_pajak_id')->constrained();
            $table->double('harga_kondisi');
            $table->double('harga_petani');
            $table->double('selisih_harga');
            $table->float('bruto')->nullable();
            $table->float('tarra')->nullable();
            $table->float('netto')->nullable();
            $table->double('subtotal');
            $table->double('pajak');
            $table->double('diskon');
            $table->double('biaya');
            $table->double('potongan_rafaksi');
            $table->double('grand_total');
            $table->float('jumlah_tergiling')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_panens');
    }
};
