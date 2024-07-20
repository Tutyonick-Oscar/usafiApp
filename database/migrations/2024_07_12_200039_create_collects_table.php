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
        Schema::create('waste.collects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->constrained('city_ref.zones')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('quorter')->nullable();
            $table->foreignId('user_id')->constrained('users.users')->restrictOnDelete()->cascadeOnUpdate();
            $table->string('av');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waste.collects');
    }
};
