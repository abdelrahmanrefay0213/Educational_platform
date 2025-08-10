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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id('lesson_id');
            $table->text('title');
            $table->string('grade_level');
            $table->integer('chapter_number');
            $table->integer('lesson_order');
            $table->boolean('is_active')->default(true);
            
            // CORRECT timestamp declarations (choose ONE of these options):
            
            // Option 1: Use Laravel's default timestamps (recommended)
            // $table->timestamps();
            
            // OR Option 2: Manual timestamp configuration
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};