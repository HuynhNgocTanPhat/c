<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanvienModel;
class NhanVienController extends Controller
{
    public function getdanhsach()
    {
       $nhanvien = NhanVienModel::all();
       return view('giaodienadmin.NhanVien.ListNhanVien',['nhanvien'=>$nhanvien]);
    }
    public function getthem()
    {
       return view('giaodienadmin.NhanVien.AddNhanVien');
    }
    public function postthem(Request $request)
    {
    //   $this->validate($request,
    //   [   
    //       'TenMonAn'=>'
    //       required|unique:MonAnModel,TenMonAn|min:3|max:100',
    //   ],
    //   [
    //       'TenMonAn.required'=>'Bạn chưa nhập tên',
    //       'TenMonAn.unique'=>'Tên đã tồn tại',
    //       'TenMonAn.min'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự',
    //       'TenMonAn.max'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự'
    //   ]);
      $nhanvien =new NhanVienModel ;
      $nhanvien->MaNV = $request->MaNV;
      $nhanvien->TenNhanVien = $request->TenNhanVien;
      $nhanvien->GioiTinh = $request->GioiTinh;
      $nhanvien->Email = $request->Email;
      $nhanvien->DiaChi = $request->DiaChi;
      $nhanvien->NgaySinh = $request->NgaySinh;
      $nhanvien->SDT = $request->SDT;
      $nhanvien->TenTaiKhoan = $request->TenTaiKhoan;
      $nhanvien->MatKhau = bcrypt($request->MatKhau);
      $nhanvien->save();
      return redirect()->route('nhanvien.getdanhsach')->with('thongbao','Thêm thành công');
    }
}
