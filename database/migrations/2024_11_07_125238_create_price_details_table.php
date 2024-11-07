<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('price_details', function (Blueprint $table) {
            $table->id('price_detail_id');
            $table->unsignedBigInteger('price_list_id');
            $table->enum('customer_type', ['ADULT', 'CHILD', 'INFANT', 'SENIOR']);
            $table->decimal('price', 12, 2);
            $table->text('note')->nullable();
            $table->foreign('price_list_id')->references('price_list_id')->on('price_lists');
        });
    }

    public function down()
    {
        Schema::dropIfExists('price_details');
    }
}
