<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('booking_id');
            $table->string('passenger_name', 100);
            $table->string('passenger_id_card', 20)->nullable();
            $table->integer('age')->nullable();
            $table->enum('customer_type', ['ADULT', 'CHILD', 'INFANT', 'SENIOR']);
            $table->decimal('applied_price', 12, 2);
            $table->string('phone', 20)->nullable();
            $table->foreign('booking_id')->references('booking_id')->on('bookings');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_details');
    }
}
