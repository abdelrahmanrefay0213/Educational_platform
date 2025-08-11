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
        Schema::create('test_attempts', function (Blueprint $table) {
            $table->id('attempt_id');
            
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('test_id');
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
            
            $table->unsignedInteger('score')->default(0);
            $table->timestamp('start_time')->useCurrent();
            $table->timestamp('end_time')->nullable();
            
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
                  
            $table->foreign('test_id')->references('test_id')->on('test_bank')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_attempts');
    }
};