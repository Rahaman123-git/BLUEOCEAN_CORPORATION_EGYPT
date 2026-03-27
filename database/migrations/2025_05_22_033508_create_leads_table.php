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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('token', length: 60);
            $table->string('lead_source');
            $table->unsignedBigInteger('lead_source_id')->nullable();
            $table->string('first_name', length: 100);
            $table->string('last_name', length: 100);
            $table->string('email', length: 100);
            $table->string('phone_no', length: 15);
            $table->string('city', length: 50);
            $table->string('country', length: 50);
            $table->string('website', length: 100)->nullable();
            $table->string('designation', length: 100);
            $table->boolean('news_letter')->default(0);
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('lead_source_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
