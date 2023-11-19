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
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('propertyid')->constrained('property', 'propertyid');
            $table->string('roomid');
            $table->string('room_name');
            $table->string('room_category')->default('');
            $table->boolean('is_listed')->default(false);
            $table->timestamps();

            $table->foreign('propertyid')->references('id')->on('property')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
