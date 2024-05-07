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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('contact')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('date')->nullable();
            $table->string('signs_symptoms')->nullable();
            $table->string('test_results')->nullable();
            $table->string('drug_prescription')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
