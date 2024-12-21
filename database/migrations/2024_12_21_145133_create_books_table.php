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
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('bookID');
            $table->string('bookCode')->unique();
            $table->string('title');
            $table->string('author');
            $table->string('category');
            $table->unsignedBigInteger('shelfID');
            $table->string('shelfCode');
            $table->unsignedBigInteger('floorNumber');
            $table->integer('bookQuantity');
            $table->foreignId('shelfID')->references('shelfID')->on('shelves');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
