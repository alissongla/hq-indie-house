<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PodcastTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('podcast_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
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
        Schema::dropIfExists('podcast_tags');
    }
}
