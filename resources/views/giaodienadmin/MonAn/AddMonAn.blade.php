@extends('giaodienadmin.form')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Thêm Món Ăn</h4>
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
                <div class="row">
                <div class="col-lg-10" style="padding-bottom:150px">
                        <form action="{{route('monan.postthem')}}" method="POST">
                        <input type ="hidden" name="_token" value = "{{csrf_token()}}"/>
                        <div class="form-group">
                                <label>Mã Món Ăn</label>
                                <input class="form-control" name="MaMonAn" placeholder="Nhập vào tên món" />
                            </div>
                            <div class="form-group">
                                <label>Tên Món Ăn</label>
                                <input class="form-control" name="TenMonAn" placeholder="Nhập vào tên món" />
                            </div>
                            <div class="form-group">
                                <label>Đơn Giá</label>
                                <input class="form-control" name="DonGia" placeholder="Nhập vào đơn giá" />
                            </div>
                            <label>Mã Loại</label>
                            <select class="form-control" name = "MaLoai">
                                @foreach($loaimonan as $tl)
                                    <option value="{{$tl -> id}}">{{$tl -> MaLoaiMonAn}}</option>
                                    @endforeach
                            </select>
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <label class="radio-inline">
                                    <input name="TrangThai" value="0" checked="" type="radio">Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="TrangThai" value="1" type="radio">Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- editor -->
</div>
@endsection