<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('education', function (Blueprint $table) {
            $table->string('degree_name_np')->nullable()->after('degree_name');
            $table->string('university_name_np')->nullable()->after('university_name');
            $table->text('description_np')->nullable()->after('description');
        });
    }

    public function down(): void
    {
        Schema::table('education', function (Blueprint $table) {
            $table->dropColumn(['degree_name_np', 'university_name_np', 'description_np']);
        });
    }
};
