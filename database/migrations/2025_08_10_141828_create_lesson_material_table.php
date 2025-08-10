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
        Schema::create('lesson_material', function (Blueprint $table) {
            $table->id('material_id');
            $table->unsignedBigInteger('lesson_id');
            $table->text('materials');
            $table->integer('material_order')->default(0);
            $table->boolean('is_active')->default(true);
            
            // CORRECT timestamp handling (choose ONE of these options):
            
            // Option 1: Laravel's default timestamps (recommended)
            // $table->timestamps();
            
            // OR Option 2: Manual timestamp configuration
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('lesson_id')->references('lesson_id')->on('lessons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_material');
    }
};