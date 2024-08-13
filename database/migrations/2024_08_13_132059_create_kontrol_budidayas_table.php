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
        Schema::create('kontrol_budidayas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('budidaya_id')->constrained();
            $table->float('Temp')->nullable();
            $table->float('Humid')->nullable();
            $table->float('Light')->nullable();
            $table->float('Acid')->nullable();
            $table->boolean('Drainase')->nullable();
            $table->boolean('Fertil')->nullable();
            $table->boolean('Pest')->nullable();
            $table->boolean('Weed')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontrol_budidayas');
    }
};
