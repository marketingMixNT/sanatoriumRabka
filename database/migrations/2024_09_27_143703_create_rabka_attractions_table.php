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
        Schema::create('rabka_attractions', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_desc')->nullable();
            $table->text('banner_img');
            $table->json('heading');
            $table->json('subheading');
            $table->json('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rabka_attractions');
    }
};
