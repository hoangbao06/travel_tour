@extends('layout.app')

@section('content')
<div class="wrapper wrapper-full-page">
<div class="content">
    <div class="container">
        <form method="post" action="{{ route('manageTour.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Thêm Tour</h2>
                    <h4>Địa Điểm - Ngày - Ghi Chú </h4>
                    <hr>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                    <div class="form-group">
                        <h6>Tên Tour</h6>
                        <input type="text" placeholder="Tên Nhân Viên" class="form-control" name="ten-tour">
                    </div>
                    <div class="form-group">
                        <h6>Tiêu Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" placeholder="Nhập Tiêu Đề Tại Đây"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Ảnh Tour</h6>
                        <div class="row">
                            <div class="col-sm-6">         
                                <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                <input type="file" name="image">
                            </p>
                            </div>
                        </div>
                    </div>   
                    <div class="form-group">
                        <h6>Giới Thiệu Về Tour </h6>
                        <textarea name="gioi-thieu" cols="48" rows="10" class="form-control" placeholder="Giới Thiệu Về Tour,Địa Điểm,.... "></textarea>
                    </div>                 
                </div>
            </div>
            <div class="col-md-4">             
                    <div class="card card-plain">
                        <div class="content">
                            <div class="form-group">
                                <h6>Điểm Xuất Phát</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="selectpicker" data-style="btn btn-danger btn-block" title="Điểm Xuất Phát" data-size="7" name="diem-xuatphat">
                                            @foreach ($diadiem as $DiaDiem)
                                            <option value="{{ $DiaDiem->tenDiaDiem }}">{{ $DiaDiem->tenDiaDiem }}</option> 
                                            @endforeach                                                                                                                  
                                
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Điểm Đến</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="selectpicker" data-style="btn btn-danger btn-block" title="Điểm Đến" data-size="7" name="diem-den">
                                                        @foreach ($diadiem as $DiaDiem)
                                                        <option value="{{ $DiaDiem->tenDiaDiem }}">{{ $DiaDiem->tenDiaDiem }}</option> 
                                                        @endforeach                                                                                                                  
                                            
                                        </select>
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <h6>Máy Bay</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="selectpicker" data-style="btn btn-danger btn-block" title="Hãng Máy Bay" data-size="7" name="may-bay">
                                                        @foreach ($mayBay as $maybay)
                                                        <option value="{{ $maybay->idMayBay }}">{{ $maybay->nameMayBay }}</option>
                                                        @endforeach                                                                                                                                                       
                                        </select>
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <h6>Khách Sạn</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="selectpicker" data-style="btn btn-danger btn-block" title="Khách Sạn" data-size="7" name="khach-san">
                                                             @foreach ($khachSan as $khachsan)
                                                             <option value="{{ $khachsan->idKhachSan }}">{{ $khachsan->nameKhachSan }}</option>
                                                             @endforeach                                                                                                                                                     
                                        </select>
                                    </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <h6>Ngày Xuất Phát</h6>
                                <input type="date" class="form-control" name="ngay-xuatphat">
                            </div>
                            <div class="form-group">
                                <h6>Ngày Kết Thúc</h6>
                                <input type="date" class="form-control" name="ngay-ketthuc">
                            </div>
                            <div class="form-group">
                                <h6>Số Lượng Người Trong Tour</h6>
                                <input type="number" class="form-control" name="so-nguoi">
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Người Lớn</h6>
                                <input type="number" class="form-control" name="gia-veNguoiLon">
                            </div>
                            <div class="form-group">
                                <h6>Giá vé Trẻ Em (>10 tuổi)</h6>
                                <input type="number" class="form-control" name="gia-veTreEm">
                            </div>
                            
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-fill btn-danger btn-wd">Create
                                Tour</button>
                        </div>
                    </div>
                
            </div>
        </div>
    </form>
    </div>

</div>
</div>
@endsection