@extends('giaodienadmin.form')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Sửa Loại Món Ăn</h4>
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
                        <form action="{{route('loaimonan.postsua',$loaimonan -> id) }}" method="POST" enctype="multipart/form-data">
                        <input type ="hidden" name="_token" value = "{{csrf_token()}}"/> 
                        
                        <div class="form-group">
                                <label>Mã Loại Món Ăn</label>
                                <input class="form-control" name="MaLoaiMonAn" placeholder="Nhập Mã Loại" value="{{$loaimonan->MaLoaiMonAn}}" />
                            </div>
                        <div class="form-group">
                                <label>Tên Loại Món Ăn</label>
                                <input class="form-control" name="TenLoaiMonAn" placeholder="Nhập Tên Loại Món Ăn" value="{{$loaimonan->TenLoaiMonAn}}"/>
                            </div>              
                            <div class="form-group">
                                <label>Trạng Thái</label>
                                <label class="radio-inline">
                                    <input name="TrangThai" value="0" 
                                @if ($loaimonan->TrangThai == 0) 
                                {{"checked"}}
                                @endif type="radio">
                                Visible
                                </label>
                                <label class="radio-inline">
                                    <input name="TrangThai" value="1"
                                    @if ($loaimonan->TrangThai == 1) 
                                    {{"checked"}}
                                    @endif
                                 type="radio">
                                 Invisible
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Product Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- editor -->
</div>
@endsection