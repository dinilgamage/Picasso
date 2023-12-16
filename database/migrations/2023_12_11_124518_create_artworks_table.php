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
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_id');
            $table->string('title');
            $table->text('desc');
            $table->string('image');
            $table->unsignedBigInteger('category_id');
            $table->decimal('price', 8, 2);
            $table->boolean('sold')->default(false);
            $table->timestamps();

            $table->foreign('artist_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
