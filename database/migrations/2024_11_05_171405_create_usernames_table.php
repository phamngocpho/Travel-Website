<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usernames', function (Blueprint $table) {
            $table->id();  // Tạo trường id tự động tăng
            $table->string('name');  // Tạo trường name kiểu string
            $table->string('email');  // Tạo trường email kiểu string
            $table->timestamps();  // Tạo 2 trường created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usernames');
    }
};
