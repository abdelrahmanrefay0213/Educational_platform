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
        Schema::create('questions', function (Blueprint $table) {
            $table->id('question_id');
            $table->unsignedBigInteger('test_id');
            $table->text('question_text');
            $table->integer('points')->default(0);
            $table->integer('question_order')->default(0);
            $table->text('correct_answer');
            $table->text('explanation')->nullable();
            
            // CORRECT timestamp handling (choose ONE option):
            
            // Option 1: Laravel's default timestamps (recommended)
            // $table->timestamps();
            
            // OR Option 2: Manual timestamp configuration
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('test_id')->references('test_id')->on('test_bank')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};