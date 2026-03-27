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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('zoho_id')->nullable();
            $table->string('slug');
            $table->enum('course_type', ['CERTIFICATION_TRAINING', 'CORPORATE_TRAINING']);
            $table->string('course_short_title_en', length: 25);
            $table->string('course_title_en');
            $table->unsignedBigInteger('course_category_id');
            $table->unsignedBigInteger('course_affiliation_id')->nullable();
            $table->enum('course_language', ['Arabic', 'English']);
            $table->enum('course_traning_location', ['India', 'Dubai'])->nullable();
            $table->longText('course_methodology_en');
            $table->longText('course_objectives_en');
            $table->longText('course_target_audience_en');
            $table->longText('course_target_competencies_en');
            $table->longText('course_meta_details')->nullable();
            $table->longText('course_schema')->nullable();
            $table->string('course_image')->nullable();
            $table->string('course_brochure')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('course_category_id')->references('id')->on('course_categories');
            $table->foreign('course_affiliation_id')->references('id')->on('course_affiliations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
