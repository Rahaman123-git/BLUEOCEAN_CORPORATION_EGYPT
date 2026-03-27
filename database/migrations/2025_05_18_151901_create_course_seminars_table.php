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
        Schema::create('course_seminars', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->enum('seminar_type', ['FREE_SEMINAR', 'PAID_SEMINAR']);
            $table->string('seminar_title_initial', length: 25);
            $table->string('seminar_title');
            $table->string('seminar_location', length: 50);
            $table->date('seminar_date');
            $table->longText('seminar_description')->nullable();
            $table->string('seminar_banner_image');
            $table->string('seminar_registration_page_banner_image');
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_seminars');
    }
};
