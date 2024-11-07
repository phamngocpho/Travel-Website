<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourImagesTable extends Migration
{
    public function up()
    {
        Schema::create('tour_images', function (Blueprint $table) {
            $table->id('image_id');
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->string('image_url', 255);
            $table->boolean('is_main')->default(false);
            $table->timestamp('uploaded_at')->useCurrent();
            $table->foreign('tour_id')->references('tour_id')->on('tours');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_images');
    }
}
