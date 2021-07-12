<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiMonAnModel;
class FoodController extends Controller
{
    public function getthem()
    {
       return view('giaodienadmin.LoaiMonAn.AddLoaiMonAn');
    }
    public function postthem(Request $request)
    {
      $this->validate($request,
      [   
          'MaLoaiMonAn'=>'
          required|min:3|max:100'
      ],
      [
          'MaLoaiMonAn.min'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự',
          'MaLoaiMonAn.max'=>'Mã loại phải có độ dài từ 3 đến 100 kí tự'
      ]);
      $loaimonan =new LoaiMonAnModel ;
      $loaimonan->MaLoaiMonAn = $request->MaLoaiMonAn;
      $loaimonan->TenLoaiMonAn = $request->TenLoaiMonAn;
      $loaimonan->TrangThai = $request->TrangThai;
      $loaimonan->save();
      return redirect()->route('loaimonan.getdanhsach')->with('thongbao','Thêm thành công');
    }
    public function getsua($id)
    {
      $loaimonan = LoaiMonAnModel::find($id);
       return view('giaodienadmin.LoaiMonAn.EditLoaiMonAn',['loaimonan'=>$loaimonan]);
    }

    public function postsua(Request $request,$id)
    {
      $loaimonan = LoaiMonAnModel::find($id);
      // $this->validate($request,
      // [   
      //     'TenLoaiMonAn'=>'
      //     TenLoaiMonAn|min:3|max:100'
      // ],
      // [
      //     'TenLoaiMonAn.min'=>'Tên loại món ănphải có độ dài từ 3 đến 100 kí tự',
      //     'TenLoaiMonAn.max'=>'Tên loại món ăn phải có độ dài từ 3 đến 100 kí tự'
      // ]);
      $loaimonan->MaLoaiMonAn = $request->MaLoaiMonAn;
      $loaimonan->TenLoaiMonAn = $request->TenLoaiMonAn;
      $loaimonan->TrangThai = $request->TrangThai;
      $loaimonan->save();
      return redirect()->route('loaimonan.getdanhsach')->with('thongbao','Bạn đã sửa thành công');
    }
    public function getdanhsach()
    {
       $loaimonan = LoaiMonAnModel::all();
       return view('giaodienadmin.LoaiMonAn.ListLoaiMonAn',['loaimonan'=>$loaimonan]);
    }

    public function getxoa($id)
    {
      $loaimonan = LoaiMonAnModel::find($id);
      $loaimonan -> delete();
      return redirect()->route('loaimonan.getdanhsach')->with('thongbao','Bạn đã xóa thành công');
    }
}
