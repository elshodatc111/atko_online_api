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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->integer('cours_id')->nullable();
            $table->string('cours_name')->nullable();
            $table->integer('price')->nullable();
            $table->string('cours_image')->nullable();
            $table->string('cours_video')->nullable();
            $table->string('cours_about')->nullable();
            $table->string('cours_text')->nullable();
            $table->string('cours_length')->nullable();
            $table->integer('cours_days')->nullable();
            $table->string('type')->nullable();
            $table->string('techer')->nullable();
            $table->string('techer_image');
            $table->string('book')->nullable();
            $table->string('test')->nullable();
            $table->string('test_javob')->nullable();
            $table->string('lugat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cours');
    }
};
