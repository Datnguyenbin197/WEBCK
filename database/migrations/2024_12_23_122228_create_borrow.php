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
            $table->string('IDB'); // Cột IDB là khóa ngoại, kiểu string
            $table->string('Masv'); // Mã sinh viên
            $table->date('dateM'); // Ngày mượn sách
            $table->timestamps();

            // Tạo liên kết khóa ngoại từ borrow.IDB đến books.IDB
            $table->foreign('IDB')->references('IDB')->on('books')->onDelete('cascade');
            $table->foreign('Masv')->references('Masv')->on('students')->onDelete('cascade');
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
