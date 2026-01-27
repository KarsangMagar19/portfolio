<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Make end_date nullable so current education records can omit it.
        if (Schema::hasColumn('education', 'end_date')) {
            DB::statement('ALTER TABLE education MODIFY end_date DATE NULL');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert end_date to NOT NULL (may fail if nulls exist).
        if (Schema::hasColumn('education', 'end_date')) {
            DB::statement('ALTER TABLE education MODIFY end_date DATE NOT NULL');
        }
    }
};

