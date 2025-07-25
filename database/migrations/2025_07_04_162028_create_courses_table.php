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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('feature_image')->nullable();
            $table->string('title');
            $table->text('description')->nullable();   // store rich text / HTML
            $table->text('how_section')->nullable();   // store rich text / HTML
            $table->text('guidance')->nullable();      // store rich text / HTML
            $table->text('reference')->nullable();     // store rich text / HTML
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
