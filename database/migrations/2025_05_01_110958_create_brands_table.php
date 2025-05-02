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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('country', 2)->nullable(); // ISO 3166-1 alpha-2
            $table->string('caption')->nullable();
            $table->text('description')->nullable();
            $table->string('website')->nullable();
            $table->string('slug')->unique(); // slugified name
            $table->decimal('rating', 2, 1)->unsigned()->default(0.0); // rating from 0.0 to 5.0
            $table->boolean('default')->default(false);  // indicates if this brand should be returned by default for users whose country geolocation is not found
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
