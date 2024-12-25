<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';  // Bảng trong cơ sở dữ liệu
 // Chỉ định cột khóa chính
 protected $primaryKey = 'IDB';  // Khóa chính là 'IDB', không phải 'id'

 // Nếu khóa chính không phải là số tự động tăng, bạn cần thêm thuộc tính này
 public $incrementing = false;

 // Nếu cột khóa chính là chuỗi thay vì số nguyên, bạn cần thêm thuộc tính này
 protected $keyType = 'string'; 

    protected $fillable = ['IDB', 'NameB', 'NameTG', 'KE', 'TANG'];  // Các cột có thể điền
}
