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
        Schema::create('countries_states', function (Blueprint $table) {
            $table->string('code', 8);
            $table->string('country_code', 8);
            $table->string('name', 64);
            $table->timestamps();

            $table->primary(['country_code', 'code']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('countries_states');
    }
};
