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
        Schema::create('nfzs', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title');
            $table->json('meta_desc');
            $table->text('banner_img');
            $table->json('title')->unique();
            $table->json('slug')->unique();
            $table->json('heading');
            $table->json('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nfzs');
    }
};
