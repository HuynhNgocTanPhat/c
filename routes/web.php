<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
// Trang User
Route::get('home','MyController@index');
Route::get('menu','MyController@menu');
Route::get('about','MyController@about');
Route::get('gallery','MyController@gallery');
Route::get('reservation','MyController@reservation');
Route::get('stuff','MyController@stuff');
Route::get('contact','MyController@contact');
Route::get('blog','MyController@blog');
Route::get('blogDetail','MyController@blogDetail');
// Trang Aamin

Route::group(['prefix'=>'admin'],function(){
        Route::get('index','MyControllerAdmin@index');
        Route::get('charts','MyControllerAdmin@charts');

        //Thêm loại món ăn
        Route::get('them', 'FoodController@getthem');
        Route::post('them', 'FoodController@postthem')->name('loaimonan.postthem');;

       //Sửa Loại Món Ăn
        Route::get('sua/{id}', 'FoodController@getsua')->name('loaimonan.getsua');
        Route::post('sua/{id}', 'FoodController@postsua')->name('loaimonan.postsua'); 

        //Xóa Loại Món Ăn
        Route::get('xoa/{id}', 'FoodController@getxoa')->name('loaimonan.getxoa');

        //Lấy Danh Sách Loại Món Ăn
        Route::get('danhsach', 'FoodController@getdanhsach')->name('loaimonan.getdanhsach');



        //Thêm Mới Món Ăn
        Route::get('themmonan', 'MonAnController@getthem');
        Route::post('themmonan', 'MonAnController@postthem')->name('monan.postthem');


         //Sửa Loại Món Ăn
        Route::get('suamonan/{id}', 'MonAnController@getsua')->name('monan.getsua');
        Route::post('suamonan/{id}', 'MonAnController@postsua')->name('monan.postsua'); 

        //Xóa Loại Món Ăn
        Route::get('xoamonan/{id}', 'MonAnController@getxoa')->name('monan.getxoa');

        //Lấy danh sách món ăn
        Route::get('dsmonan', 'MonAnController@getdanhsach')->name('monan.getdanhsach');



        //Lấy danh sách hóa đơn
        Route::get('dshoadon', 'HoaDonController@getdanhsach')->name('hoadon.getdanhsach');

        //Thêm Mới hóa đơn
        Route::get('themhoadon', 'HoaDonController@getthem');
        Route::post('themhoadon', 'HoaDonController@postthem')->name('hoadon.postthem');


        //Lấy danh sách nhân viên
        Route::get('dsnhanvien', 'NhanVienController@getdanhsach')->name('nhanvien.getdanhsach');

        //Thêm Mới Nhân Viên
        Route::get('themnhanvien', 'NhanVienController@getthem');
        Route::post('themnhanvien', 'NhanVienController@postthem')->name('nhanvien.postthem');
}); 

// require_once 'frontend.php';

Route::get('model/loaimonan/save',function(){
   $monan = new App\Models\LoaiMonAnModel();
   $monan-> id_MaLoai = "MA2" ;
   $monan-> TenLoaiMonAn = "heo" ;
   $monan-> save();
   echo "Da thuc hien save";
});