<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn(['emoji', 'description', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->string('emoji')->nullable();
            $table->string('description')->nullable();
            $table->integer('sort_order')->default(0);
        });
    }
};
