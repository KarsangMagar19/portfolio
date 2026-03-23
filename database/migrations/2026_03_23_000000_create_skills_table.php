<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category'); // e.g. Frontend Development, Backend Development, Database & Storage, Tools & Technologies, Additional Skills
            $table->string('emoji')->nullable(); // emoji icon for the category
            $table->integer('proficiency')->nullable(); // 0-100 percentage, null for badge-style (Additional Skills)
            $table->string('description')->nullable(); // short description shown under progress bar
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
