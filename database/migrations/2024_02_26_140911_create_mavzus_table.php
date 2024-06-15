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
        Schema::create('mavzus', function (Blueprint $table) {
            $table->id();
            $table->integer('cours_id');
            $table->string('mavzu_id');
            $table->string('mavzu_name');
            $table->string('mavzu_video');
            $table->string('mavzu_text');
            $table->string('mavzu_length');
            $table->integer('mavzu_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mavzus');
    }
};
