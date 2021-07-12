@extends('giaodienadmin.form')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Thêm Loại Món Ăn</h4>
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
                        <form action="{{route('loaimonan.postthem')}}" method="POST"  enctype="multipart/form-data">
                            <input type ="hidden" name="_token" value = "{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Mã Loại Món Ăn</label>
                                <input class="form-control" name="MaLoaiMonAn" placeholder="Nhập mã loại món ăn" />
                            </div>
                            <div class="form-group">
                                <label>Tên Loại Món Ăn</label>
                                <input class="form-control" name="TenLoaiMonAn" placeholder="Nhập tên loại món ăn" />
                            </div>
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
</div>
@endsection