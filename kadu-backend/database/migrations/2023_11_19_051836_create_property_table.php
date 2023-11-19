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
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('propertyid');
            $table->string('property_name');
            $table->string('property_category');
            $table->integer('number_of_rooms');
            $table->integer('number_of_listed_rooms');
            $table->boolean('is_listed')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_most_liked')->default(false);
            $table->string('location');
            $table->string('geolocation')->nullable();
            $table->string('contact_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property');
    }
};
