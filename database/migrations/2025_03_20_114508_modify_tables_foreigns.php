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
        if (Schema::hasTable('users')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreign('personal_id')
                    ->references('id')
                    ->on('demographics_personals')
                    ->onDelete('cascade');
            });
        }

        if (Schema::hasTable('demographics_personals')) {
            Schema::table('demographics_personals', function (Blueprint $table) {
                $table->foreign('address_id')
                    ->references('id')
                    ->on('demographics_addresses')
                    ->onDelete('cascade');
            });
        }
    }

    public function down(): void
    {
        Schema::table('demographics_personals', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['personal_id']);
        });
    }
};
