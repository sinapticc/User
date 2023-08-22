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
            $table->string('name');
            $table->string('family_name');
            $table->string('father_name');
            $table->string('nat_id');
            $table->string('birth_place');
            $table->integer('province');
            $table->integer('city');
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
