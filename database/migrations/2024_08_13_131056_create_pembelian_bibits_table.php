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
        Schema::create('pembelian_bibits', function (Blueprint $table) {
            $table->id();
            $table->string('faktur')->unique();
            $table->foreignId('petani_id')->constrained();
            $table->foreignId('tarif_pajak_id')->constrained();
            $table->double('subtotal');
            $table->double('pajak');
            $table->double('diskon');
            $table->double('biaya');
            $table->double('grand_total');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_bibits');
    }
};
