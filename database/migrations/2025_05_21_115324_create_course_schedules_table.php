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
        Schema::create('course_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('delivery_platform', length: 25)->nullable();
            $table->string('language', length: 50)->nullable();
            $table->string('course_code', length: 50)->nullable();
            $table->string('course_venue', length: 100)->nullable();
            $table->string('country', length: 100)->nullable();
            $table->enum('course_learning_mode', ['Online', 'Offline'])->nullable();
            $table->string('timezone', length: 100)->nullable();
            $table->date('course_start_date')->nullable();
            $table->date('course_end_date')->nullable();
            $table->string('start_time', length: 10)->nullable();
            $table->string('end_time', length: 10)->nullable();
            $table->string('course_duration', length: 25)->nullable();
            $table->string('course_currency', length: 4)->nullable();
            $table->float('course_amount', precision: 53)->nullable();
            $table->boolean('sunday')->default(0);
            $table->boolean('monday')->default(0);
            $table->boolean('tuesday')->default(0);
            $table->boolean('wednesday')->default(0);
            $table->boolean('thursday')->default(0);
            $table->boolean('friday')->default(0);
            $table->boolean('saturday')->default(0);
            $table->timestamps();
            $table->softDeletes('deleted_at', precision: 0);

            $table->foreign('course_id')->references('id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_schedules');
    }
};
