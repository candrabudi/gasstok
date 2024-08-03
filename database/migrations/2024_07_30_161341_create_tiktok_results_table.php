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
        Schema::create('tiktok_results', function (Blueprint $table) {
            $table->id();
            $table->integer('tiktok_search_id');
            $table->string('nickname');
            $table->string('unique_id')->nullable();
            $table->string('tiktok_id')->nullable();
            $table->string('following')->nullable();
            $table->string('followers')->nullable();
            $table->string('likes')->nullable();
            $table->string('total_video')->nullable();
            $table->string('signature')->nullable();
            $table->string('avatar_thumb')->nullable();
            $table->string('avatar_medium')->nullable();
            $table->string('avatar_large')->nullable();
            $table->integer('verified')->default(0);
            $table->integer('is_scrapper')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktok_results');
    }
};
