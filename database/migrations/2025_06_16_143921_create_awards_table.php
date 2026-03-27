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
        Schema::create('awards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('award_category_id');
            $table->string('title');
            $table->string('awarding_body')->nullable();
            $table->mediumText('significance')->nullable();
            $table->mediumText('impact')->nullable();
            $table->mediumText('image');
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('award_category_id')->references('id')->on('award_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awards');
    }
};
