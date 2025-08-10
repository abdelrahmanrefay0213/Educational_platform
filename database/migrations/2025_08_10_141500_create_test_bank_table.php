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
        Schema::create('test_bank', function (Blueprint $table) {
            $table->id('test_id');
            $table->string('title');
            $table->unsignedBigInteger('lesson_id');
            $table->foreign('lesson_id')->references('lesson_id')->on('lessons')->onDelete('cascade');
            $table->string('grade_level');
            $table->string('test_type');
            $table->time('duration');
            $table->integer('total_points');
            $table->text('options');
            $table->text('correct_answer');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_bank');
    }
};
