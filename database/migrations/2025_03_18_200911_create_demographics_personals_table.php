<?php
/*
 * Copyright (c) 2025
 *
 *  @author Juan Manuel Cortéz <juanm.cortez@gmail.com>
 *  @copyright 2025 Nobidium LLC.
 *  @license MIT License
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('demographics_personals', function (Blueprint $table) {
            $table->id();

            $table->string('title', 8)->nullable();
            $table->string('first_name', 64);
            $table->string('middle_name', 64)->nullable();
            $table->string('last_name', 64);

            $table->date('date_of_birth');
            $table->string('gender', 16)->nullable();

            $table->string('social_security', 16)->nullable();
            $table->string('license', 16)->nullable();

            $table->unsignedBigInteger('address_id')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demographics_personals');
    }
};
