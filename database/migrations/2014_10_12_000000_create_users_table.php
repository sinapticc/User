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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->default('public/storage/user_images/default-image.png');
            $table->string('name');
            $table->string('family_name');
            $table->string('father_name');
            $table->string('nat_id');
            $table->integer('province1');
            $table->integer('city1');
            $table->integer('province2');
            $table->integer('city2');
            $table->string('address');
            $table->string('marriage');
            $table->string('birth_date');
            $table->string('phone_num');
            $table->string('telephone');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
