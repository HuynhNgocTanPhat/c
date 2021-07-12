<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HoaDonModel;
class HoaDonController extends Controller
{
    public function getdanhsach()
    {
       $hoadon = HoaDonModel::all();
       return view('giaodienadmin.HoaDon.ListHoaDon',['hoadon'=>$hoadon]);
    }
    public function getthem()
    {
       return view('giaodienadmin.HoaDon.AddHoaDon');
    }
    public function postthem(Request $request)
    {
      $this->validate($request,
      [   
          'MaHD'=>'
          required|min:3|max:100'
      ],
      [
          'MaHD.min'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự',
          'MaHD.max'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự'
      ]);
      $hoadon =new HoaDonModel ;
       $hoadon->MaHD = $request->MaHD;
       $hoadon->id_MaKH= $request->id_MaKH;
       $hoadon->TongTien= $request->TongTien;
       $hoadon->TrangThai = $request->TrangThai;
       $hoadon->save();
      return redirect()->route('hoadon.getdanhsach')->with('thongbao','Thêm thành công');
    }


}
