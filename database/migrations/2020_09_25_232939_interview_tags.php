<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InterviewTags extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('interview_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('interview_id')->references('id')->on('interviews');
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
        Schema::dropIfExists('interview_tags');
    }
}
