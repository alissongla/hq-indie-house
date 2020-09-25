<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PodcastCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('podcast_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('podcast_id')->references('id')->on('podcasts');

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
        Schema::dropIfExists('podcast_categories');
    }
}
