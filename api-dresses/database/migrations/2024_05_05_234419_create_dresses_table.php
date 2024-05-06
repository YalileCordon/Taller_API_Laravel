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
        Schema::create('dresses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->string('color');
            $table->string('material');
            $table->string('gender');
            $table->string('origin');
            $table->string('description');
            $table->double('price');
            $table->integer('quantity');
            $table->string('designer');
            $table->boolean('status');
            $table->timestamp('manufacturing_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dresses');
    }
};
