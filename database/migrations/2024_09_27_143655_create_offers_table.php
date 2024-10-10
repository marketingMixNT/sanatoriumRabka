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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->json('title')->unique();
            $table->json('slug')->unique();
            $table->text('thumbnail');
            $table->json('heading');
            $table->json('subheading');
            $table->text('reservation_link');
            $table->text('banner_img');
            $table->json('short_desc');
            $table->json('description');
            $table->dateTime('published_at');
            $table->dateTime('published_end');
            $table->integer('sort')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
