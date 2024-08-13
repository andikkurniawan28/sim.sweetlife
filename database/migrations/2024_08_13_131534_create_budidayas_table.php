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
        Schema::create('budidayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pembelian_bibit_id')->constrained();
            $table->foreignId('kebun_id')->constrained();
            $table->foreignId('varietas_id')->constrained();
            $table->date('tanggal_tanam');
            $table->float('jumlah_tertanam');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budidayas');
    }
};
