<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MonAnModel;
use App\Models\LoaiMonAnModel;
class MonAnController extends Controller
{
    public function getthem()
    {
        $loaimonan = LoaiMonAnModel::all();
       return view('giaodienadmin.MonAn.AddMonAn',['loaimonan'=>$loaimonan]);
    }
    public function getdanhsach()
    {
       $monan = MonAnModel::all();
       return view('giaodienadmin.MonAn.ListMonAn',['monan'=>$monan]);
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
      $monan =new MonAnModel ;
      $monan->MaMonAn = $request->MaMonAn;
      $monan->TenMonAn = $request->TenMonAn;
      $monan->DonGia = $request->DonGia;
      $monan->id_MaLoai = $request->MaLoai;
      $monan->TrangThai = $request->TrangThai;
      $monan->save();
      return redirect()->route('monan.getdanhsach')->with('thongbao','Thêm thành công');
    }

    public function getxoa($id)
    {
      $monan = MonAnModel::find($id);
      $monan -> delete();
      return redirect()->route('monan.getdanhsach')->with('thongbao','Bạn đã xóa thành công');
    }

    public function getsua($id)
    {
        $loaimonan = LoaiMonAnModel::all();
      $monan = MonAnModel::find($id);
       return view('giaodienadmin.MonAn.EditMonAn',['monan'=>$monan,'loaimonan'=>$loaimonan]);
    }

    public function postsua(Request $request,$id)
    {
      $monan = MonAnModel::find($id);
      // $this->validate($request,
      // [   
      //     'TenLoaiMonAn'=>'
      //     TenLoaiMonAn|min:3|max:100'
      // ],
      // [
      //     'TenLoaiMonAn.min'=>'Tên loại món ănphải có độ dài từ 3 đến 100 kí tự',
      //     'TenLoaiMonAn.max'=>'Tên loại món ăn phải có độ dài từ 3 đến 100 kí tự'
      // ]);
      $monan->MaMonAn = $request->MaMonAn;
      $monan->TenMonAn = $request->TenMonAn;
      $monan->DonGia = $request->DonGia;
      $monan->id_MaLoai = $request->MaLoai;
      $monan->TrangThai = $request->TrangThai;
      $monan->save();
      return redirect()->route('monan.getdanhsach')->with('thongbao','Bạn đã sửa thành công');
    }
}
