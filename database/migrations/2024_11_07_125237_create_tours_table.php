<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id('tour_id');
            $table->string('tour_name', 200);
            $table->text('description')->nullable();
            $table->integer('duration_days');
            $table->integer('max_participants')->nullable();
            $table->string('category', 50)->nullable();
            $table->string('transportation', 100)->nullable();
            $table->boolean('include_hotel')->default(true);
            $table->boolean('include_meal')->default(true);
            $table->text('highlight_places')->nullable();
            $table->timestamps();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('location_id')->on('locations');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
