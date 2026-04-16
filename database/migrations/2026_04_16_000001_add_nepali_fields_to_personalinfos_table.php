<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personalinfos', function (Blueprint $table) {
            $table->text('short_bio_np')->nullable()->after('short_bio');
            $table->longText('long_bio_np')->nullable()->after('long_bio');
        });
    }

    public function down(): void
    {
        Schema::table('personalinfos', function (Blueprint $table) {
            $table->dropColumn(['short_bio_np', 'long_bio_np']);
        });
    }
};
