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
        Schema::create('announcements', function (Blueprint $table) {
            $table->id('announcement_id');
            $table->text('title');
            $table->text('content');
            $table->string('target_grade_level');
            $table->dateTime('publish_date')->useCurrent();
            $table->dateTime('expiration_date')->nullable();
            $table->boolean('is_active')->default(true);
            
            // Correct timestamps usage:
            // $table->timestamps(); // This creates both created_at and updated_at columns
            
            // OR if you need custom behavior:
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
    }
};
