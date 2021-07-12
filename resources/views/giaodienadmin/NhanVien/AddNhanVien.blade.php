@extends('giaodienadmin.form')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Thêm Hóa Đơn</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
</div>
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                <div class="col-lg-10" style="padding-bottom:150px">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                </div>
                @endif

                @if (session('thongbao'))
                    <div class="alert alert-success">
                    {{session('thongbao')}}
                    </div>
                @endif  
                        <form action="{{route('nhanvien.postthem')}}" method="POST"  enctype="multipart/form-data">
                            <input type ="hidden" name="_token" value = "{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Mã Nhân Viên</label>
                                <input class="form-control" name="MaNV" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Tên Nhân Viên</label>
                                <input class="form-control" name="TenNhanVien" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Giới Tính</label>
                                <input class="form-control" name="GioiTinh" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="Email" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="" />
                            </div>
                            
                            <label>Ngày Sinh</label>
                            <div class="input-group">
                                    <input type="text" class="form-control mydatepicker" name="NgaySinh" placeholder="mm/dd/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label>SĐT</label>
                                <input class="form-control" name="SDT" placeholder="" />
                            </div>
                            </div> <div class="form-group">
                                <label>Tên Tài Khoản</label>
                                <input class="form-control" name="TenTaiKhoan" placeholder="" />
                            </div>
                            </div> <div class="form-group">
                                <label>Mật Khẩu</label>
                                <input type="password" class="form-control" name="TenTaiKhoan" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <input type="file" name="Avatar">
                            </div>
                            <div class="form-group">
                                <label>Quản Lý</label>
                                <label class="radio-inline">
                                    <input name="QuanLy" value="0" checked="" type="radio">Thường
                                </label>
                                <label class="radio-inline">
                                    <input name="QuanLy" value="1" type="radio">Admin
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
</div>
@endsection