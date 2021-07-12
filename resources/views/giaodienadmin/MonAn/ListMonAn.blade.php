@extends('giaodienadmin.listform')
@section('content')
<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
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
<div class="row">
    <div class="col-12">
<div class="card">
                <div class="card-body">
                                <h5 class="card-title">Danh Sách Loại Món Ăn</h5>
                                @if (session('thongbao'))
                                <div class="alert alert-success">
                                {{session('thongbao')}}
                                </div>
                                @endif  
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã Món Ăn</th>
                                                <th>Tên Món Ăn</th>
                                                <th>Đơn Giá</th>
                                                <th>Mã Loại</th>
                                                <th>Trạng Thái</th>
                                                <th>Created_At</th>
                                                <th>Updated_At</th>
                                                <th>Delete</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($monan as $tl)
                                            <tr>
                                                <td>{{$tl -> id}}</td>
                                                <td>{{$tl -> MaMonAn}}</td>
                                                <td>{{$tl -> TenMonAn}}</td>
                                                <td>{{$tl -> DonGia}}</td>
                                                <td>{{$tl -> id_MaLoai}}</td>
                                                <td>{{$tl -> TrangThai}}</td>
                                                <td>{{$tl -> created_at}}</td>
                                                <td>{{$tl -> updated_at}}</td>
                                                <td class="center"><i class="fas fa-trash"></i><a href="{{route('monan.getxoa',$tl -> id)}}">  Delete</a></td>
                                                <td class="center"><i class="fas fa-paint-brush"></i> <a href="{{route('monan.getsua',$tl -> id)}}"> Edit</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
         </div>
</div>
    <!--Table-->
    <script src="../../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection