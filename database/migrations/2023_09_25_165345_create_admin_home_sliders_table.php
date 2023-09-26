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
        Schema::create('admin_home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('es_title')->nullable();
            $table->string('es_description')->nullable();
            $table->string('es_button')->nullable();
            $table->string('en_title')->nullable();
            $table->string('en_description')->nullable();
            $table->string('en_button')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_home_sliders');
    }
};
