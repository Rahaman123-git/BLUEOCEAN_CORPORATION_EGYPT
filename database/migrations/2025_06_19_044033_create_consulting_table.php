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
        Schema::create('consulting', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('consulting_company_id');
            $table->string('consulting_title');
            $table->string('slug');
            $table->mediumText('challenge');
            $table->mediumText('highlighted_summary');
            $table->mediumText('highlighted_issue');
            $table->longText('boc_engagement_approach');
            $table->longText('solutions_designed_delivered');
            $table->longText('business_impact_delivered');
            $table->longText('key_learnings_recommendations');
            $table->longText('why_boc');
            $table->string('case_study_file')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('consulting_company_id')->references('id')->on('consulting_companies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consulting');
    }
};
