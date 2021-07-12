<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienModel extends Model
{
    use HasFactory;
    protected $table = "nhan_vien";
    protected $fillable =[
        'MaNV','TenNhanVien','GioiTinh','Email','DiaChi','NgaySinh','SDT','TenTaiKhoan','MatKhau','Avatar','QuanLy'
    ];
}
