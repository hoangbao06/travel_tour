@extends('layout.app')

@section('content')

<div class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Tour</h2>
                    <h4>{{ $tour->nameTour }}</h4>
                    <div>
                        <img src="{{  URL::to($tour->anhTour) }}" width="800px">
                    </div>
                </div>    
            </div>
            <br>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                    <div class="form-group">
                        <h6>Tên Tour</h6>
                        {{-- <input type="text" class="form-control" value="{{ $tour->nameTour }}" disabled> --}}
                    </div>
                    <div class="form-group">
                        <h6>Tiêu Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" disabled>
                            {{ $tour->tieuDe }}
                        </textarea>
                    </div>                    
                    <div class="form-group">
                        <h6>Giới Thiệu Về Tour </h6>
                        <textarea name="ghi-chu" cols="48" rows="10" class="form-control" disabled>
                            {{ $tour->gioiThieu }}
                        </textarea>
                    </div>      
                    <div class="form-group">
                        <h6>Máy Bay</h6>
                        <input type="text" class="form-control" value="{{ $tour->nameMayBay .'-'.$tour->hangMayBay}}" disabled>
                    </div>
                    <div class="form-group">
                        <h6>Khách Sạn</h6>
                        <input type="text" class="form-control" value="{{ $tour->nameKhachSan }}" disabled>
                    </div>
                    {{-- <a href="{{ route('tourDetail.index',$tour->idTour) }}" class="btn btn-fill btn-danger btn-wd">Tour Chi Tiết</a>          --}} 
                </div>
                <form action="{{ route('tourDetail.index') }}" method="get">
                    <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                    <button class="btn btn-fill btn-danger btn-wd">Tour Detail</button>
            </form>
            <br>
            <form action="{{ route('listCustomerTour.index') }}">
                <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                <button class="btn btn-fill btn-danger btn-wd">Hóa Đơn</button>
            </form>
            
            </div>
            <div class="col-md-4">             
                    <div class="card card-plain">
                        <div class="content">
                            <div class="form-group">
                                <h6>Điểm Xuất Phát</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{ $tour->diemXuatPhat }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Điểm Đến</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" value="{{ $tour->diemDen }}" disabled>
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <h6>Ngày Xuất Phát</h6>
                                <input type="date" class="form-control" value="{{ $tour->ngayKhoiHanh }}" disabled>
                            </div>
                            <div class="form-group">
                                <h6>Ngày Kết Thúc</h6>
                                <input type="date" class="form-control" value="{{ $tour->ngayKetThuc }}" disabled>
                            </div>
                            <div class="form-group">
                                <h6>Số Lượng Người Trong Tour</h6>
                                <input type="number" class="form-control" value="{{ $tour->soLuongNguoi }}" disabled>
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Người Lớn</h6>
                                <input type="number" class="form-control" value="{{ $tour->giaNguoiLon }}" disabled>
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Trẻ Em (>10 tuổi)</h6>
                                <input type="number" class="form-control" value="{{ $tour->giaTreEm }}" disabled>
                            </div>
                            
                        </div>
                        <div class="text-center">
                            <p class="btn btn-warning btn-fill btn-wd"> @if ($tour->soLuongNguoi == 0)
                                    {{ 'Hết Chỗ' }}
                                @else
                                    {{ 'Còn Chỗ' }}
                                @endif
                            </p>
                        </div>
                    </div>              
            </div>  
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Ảnh Chi Tiết Tour</h2>
                    <h4>{{ $tour->nameTour }}</h4>
                </div>     
                <div class="text-right">
                    {{-- <a href="{{ route('imageDetail.create') }}"class="btn btn-fill btn-danger btn-wd">Thêm Ảnh</a> --}}
                    <form action="{{ route('imageDetail.create') }}" method="get">
                    <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
                    <button class="btn btn-fill btn-danger btn-wd">Thêm Ảnh</button>
                    </form>
                </div> 
                <br>  
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-content table-responsive table-full-width">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center">idImage</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                       @foreach ($anhDetail as $anh)                                          
                                        <tbody>
                                            <tr>
                                                <td class="text-center">{{ $anh->idAnh }}</td>
                                                <td class="text-center"><img src="{{ $anh->anh }}" width="350px"></td>
                                                <td ><a href="{{ route('imageDetail.edit',$anh->idAnh) }}"><button class="btn btn-sm btn-fill">UPDATE</button></a></td>
                                                <td >
                                                    <form action="{{ route('imageDetail.destroy', $anh->idAnh) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-fill">DELETE</button>
                                                    </form>
                                                </td>
                                            </tr>                                                                        
                                        </tbody>    
                                        @endforeach
                                    </table>                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    
        </div>
    </div>

</div>
<br>
@endsection