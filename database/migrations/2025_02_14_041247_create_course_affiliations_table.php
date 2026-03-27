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
        Schema::create('course_affiliations', function (Blueprint $table) {
            $table->id();
            $table->string('short_name_en', length: 25);
            $table->string('name_en');
            $table->longText('description_en')->nullable();
            $table->longText('course_description_en')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_affiliations');
    }
};
