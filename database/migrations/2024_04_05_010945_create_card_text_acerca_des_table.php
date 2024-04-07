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
        Schema::create('card_text_acerca_des', function (Blueprint $table) {
            $table->id();
            $table->text('description_es');
            $table->string('name_es');
            $table->string('ocupacion_es');
            $table->text('description_en');
            $table->string('name_en');
            $table->string('ocupacion_en');
            $table->integer('order')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_text_acerca_des');
    }
};
