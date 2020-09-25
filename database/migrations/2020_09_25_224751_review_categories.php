<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReviewCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('review_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('review_id')->references('id')->on('reviews');

            $table->engine = 'MyISAM';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_categories');
    }
}
