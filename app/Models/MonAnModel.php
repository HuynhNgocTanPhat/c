<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonAnModel extends Model
{
    use HasFactory;
    protected $table = "mon_an";
    protected $fillable =[
        'MaMonAn','TenMonAn','DonGia','id_MaLoai','TrangThai'
    ];
    public function loaimonan()
    {
        return $this->belongsTo('App\Models\LoaiMonAnModel','id_MaLoai','id');
    }
}
