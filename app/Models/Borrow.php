<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    use HasFactory;

    protected $table = 'borrow';


    protected $primaryKey = null; // Nếu không có cột khóa chính
    public $incrementing = false;

    protected $fillable = ['IDB', 'Masv', 'dateM', 'dateT', 'traB'];
    public function student()
    {
        return $this->belongsTo(Stu::class, 'Masv', 'Masv');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'IDB', 'IDB');
    }
}