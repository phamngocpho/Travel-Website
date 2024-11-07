<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIndexesToTables extends Migration
{
    public function up()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->index('is_active', 'idx_tour_status');
        });

        Schema::table('tour_schedules', function (Blueprint $table) {
            $table->index('departure_date', 'idx_schedule_date');
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->index('status', 'idx_booking_status');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->index('email', 'idx_user_email');
        });

        Schema::table('price_lists', function (Blueprint $table) {
            $table->index(['valid_from', 'valid_to'], 'idx_price_list_dates');
        });
    }

    public function down()
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropIndex('idx_tour_status');
        });

        Schema::table('tour_schedules', function (Blueprint $table) {
            $table->dropIndex('idx_schedule_date');
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropIndex('idx_booking_status');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex('idx_user_email');
        });

        Schema::table('price_lists', function (Blueprint $table) {
            $table->dropIndex('idx_price_list_dates');
        });
    }
}
