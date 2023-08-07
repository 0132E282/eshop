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
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('rul_banner', 200)->default(null);
            $table->string('links', 200)->default(null);
            $table->string('title', 500)->default(null);
            $table->string('description', 500)->default(null);
            $table->string('meta', 500)->default(null);
            $table->string('type', 200)->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner');
    }
};
