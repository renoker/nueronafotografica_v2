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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->foreign('galeria_blog_id')->references('id')->on('galeria_blogs');
            $table->unsignedBigInteger('galeria_blog_id')->nullable();
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->unsignedBigInteger('size_id')->nullable();
            $table->foreign('finish_id')->references('id')->on('finishes');
            $table->unsignedBigInteger('finish_id')->nullable();
            $table->foreign('paper_id')->references('id')->on('papers');
            $table->unsignedBigInteger('paper_id')->nullable();
            $table->decimal('precio')->nullable();
            $table->string('image')->nullable();
            $table->string('fondo')->nullable();
            $table->string('name')->nullable();
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
        Schema::dropIfExists('galleries');
    }
};
