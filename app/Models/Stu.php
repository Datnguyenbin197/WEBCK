<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stu extends Model
{
  

    protected $table = 'students';  // Bảng trong cơ sở dữ liệu
 // Chỉ định cột khóa chính
 protected $primaryKey = 'Masv';  // Khóa chính là 'IDB', không phải 'id'

 // Nếu khóa chính không phải là số tự động tăng, bạn cần thêm thuộc tính này
 public $incrementing = false;

 // Nếu cột khóa chính là chuỗi thay vì số nguyên, bạn cần thêm thuộc tính này
 protected $keyType = 'string'; 

    protected $fillable = ['Masv', 'Tensv', 'class', 'SDT'];  // Các cột có thể điền

    public function borrows()
    {
        return $this->hasMany(Borrow::class, 'Masv', 'Masv');
    }
}