<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiMonAnModel extends Model
{
    use HasFactory;
    protected $table = "loai_mon_an";
    protected $fillable =[
        'MaLoaiMonAn','TenLoaiMonAn','TrangThai'
    ];
    public function monan()
    {
        return $this->hasMany('App\Models\MonAnModel','id_MaLoai','id');
    }
}
