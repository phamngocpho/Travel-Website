<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('location_name', 100);
            $table->string('province', 50);
            $table->string('region', 50)->nullable();
            $table->text('description')->nullable();
            $table->string('coordinates', 50)->nullable();
            $table->boolean('is_popular')->default(false);
            $table->string('best_time_to_visit', 100)->nullable();
            $table->text('weather_notes')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
