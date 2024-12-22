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
        Schema::create('borrow', function (Blueprint $table) {
            $table->id('ID');
            $table->unsignedBigInteger('studentID');
            $table->string('studentName');
            $table->string('studentClass');
            // $table->unsignedBigInteger('bookID');
            // $table->string('bookCode');
            // $table->string('title');
            // $table->string('author');
            // $table->string('category');
            // $table->foreign('bookID')->references('bookID')->on('book');
            // $table->foreign('studentID')->references('studentID')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow');
    }
};
