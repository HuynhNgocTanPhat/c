<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllerAdmin extends Controller
{
       //Trang chủ Admin
       public function index()
       {
          return view('giaodienadmin.index');
       }
       // Trang biểu đồ admin
       public function charts()
       {
          return view('giaodienadmin.charts');
       }
       // Trang bảng xử lý dữ liệu
       public function form()
       {
          return view('giaodienadmin.form');
       }
}