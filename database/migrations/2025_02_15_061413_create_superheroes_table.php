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
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('universe_id')->index();
            $table->string('real_firstname');
            $table->string('real_lastname');
            $table->string('alter_ego');
            $table->string('superpower');
            $table->integer('age');
            $table->foreign('universe_id')->references('id')->on('universes')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
