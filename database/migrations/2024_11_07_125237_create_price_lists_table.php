<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceListsTable extends Migration
{
    public function up()
    {
        Schema::create('price_lists', function (Blueprint $table) {
            $table->id('price_list_id');
            $table->string('price_list_name', 100);
            $table->dateTime('valid_from')->nullable();
            $table->dateTime('valid_to')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_default')->default(false);
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('tour_id')->references('tour_id')->on('tours');
        });
    }

    public function down()
    {
        Schema::dropIfExists('price_lists');
    }
}
