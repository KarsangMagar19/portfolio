<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->string('title_np')->nullable()->after('title');
            $table->string('company_np')->nullable()->after('company');
            $table->longText('description_np')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {
            $table->dropColumn(['title_np', 'company_np', 'description_np']);
        });
    }
};
