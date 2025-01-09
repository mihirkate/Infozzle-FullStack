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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Product name
            $table->decimal('price', 8, 2); // Product price
            $table->string('image')->nullable(); // Image URL
            $table->unsignedBigInteger('owner_id'); // Owner ID
            $table->timestamps(); // Timestamps for created_at and updated_at
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key to users table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
