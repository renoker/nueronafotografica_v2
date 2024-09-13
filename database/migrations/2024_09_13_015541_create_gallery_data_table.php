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
        Schema::create('gallery_data', function (Blueprint $table) {
            $table->id();
            $table->string('name_cliente')->nullable();
            $table->string('email_cliente')->nullable();
            $table->foreign('gallery_id')->references('id')->on('galleries');
            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_data');
    }
};
