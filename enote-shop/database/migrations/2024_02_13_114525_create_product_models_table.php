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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('product_article')->unique();
            $table->string('product_title');
            $table->string('product_slug')->nullable()->index();
            $table->string('product_subtitle')->nullable();
            $table->string('product_description')->nullable();
            $table->integer('product_group_id')->default(0);
            $table->string('product_images')->nullable();
            $table->string('product_wb_link')->nullable();
            $table->string('product_wb_price')->nullable();
            $table->string('product_oz_link')->nullable();
            $table->string('product_oz_ptice')->nullable();
            $table->string('product_ym_link')->nullable();
            $table->string('product_ym_price')->nullable();
            $table->string('product_sm_link')->nullable();
            $table->string('product_sm_price')->nullable();
            $table->string('product_av_link')->nullable();
            $table->string('product_av_price')->nullable();
            $table->string('product_mine_price')->nullable();
            $table->string('product_mine_parameters')->nullable();
            $table->string('product_reviews_link')->nullable();
            // Для яндекс товаров
            $table->boolean('product_yt_status');


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_models');
    }
};
