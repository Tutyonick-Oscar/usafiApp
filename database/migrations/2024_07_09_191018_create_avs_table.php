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
        Schema::create('city_ref.avs', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->foreignId('zone_id')->constrained('city_ref.zones')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->foreignId('quorter_id')->constrained('city_ref.quorters')->cascadeOnDelete()->cascadeOnUpdate()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avs');
    }
};
