@extends('layout.app')
@section('content')
<div class="content">
    <div class="row">
        <div class="text-right">
            <form action="{{ route('tourDetail.create') }}" method="get">
                <input type="hidden" value="{{ $tour->idTour }}" name="id-tour">
                <button class="btn btn-fill btn-danger btn-wd">Thêm Lịch Trình</button>
        </form>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="header-text">
                <h2>Tour Chi Tiết</h2>
                <h4>{{ $tour->nameTour }}</h4>
                <div>
                    <img src="{{  URL::to($tour->anhTour) }}" width="800px">
                </div>
            </div>    
        </div>    
    </div>
    
    <!---- Phần hiển thị tour chi tiết theo ngày,lịch trình ---->
    @foreach ($tourDetail as $tourdetail)
        
   
    <div class="wrapper wrapper-full-page">
        <div class="content">                      
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>Lịch Trình</h2>
                            <h4>Lịch Trình Ngày : {{ $tourdetail->Ngay }} ( {{ $tourdetail->diemXuatPhat . ' -> ' . $tourdetail->diemDen}} )</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                         <div class="card card-plain">
                                    <div class="content">
                                        <div class="row">                       
                                        <h5>Điểm Xuất Phát</h5>
                                        <div class="col-sm-6">
                                            <input type="text" value="{{ $tourdetail->diemXuatPhat }}" class="form-control" disabled>
                                        </div>
                                        </div>
                                        <div class="row">                               
                                        <h5>Điểm Đến</h5>
                                        <div class="col-sm-6" >
                                            <input type="text" value="{{ $tourdetail->diemDen }}" class="form-control" disabled>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <h5>Giờ Bắt Đầu</h5>
                                            <input type="time" class="form-control" value="{{ $tourdetail->gioBatDau }}" disabled>
                                        </div>
                                        <div class="row">
                                            <h5>Giờ Kết Thúc</h5>
                                            <input type="time" class="form-control" value="{{ $tourdetail->gioDen }}" disabled>
                                        </div>
                                        <div class="row">
                                            <h6> Ảnh Lịch Trình</h6>
                                                 
                                                <img src="{{ URL::to($tourdetail->anh) }}" width="800px">                                                                    
                                        </div>
                                    </div>
                        
                                </div>               
                    </div>           
                    <div class="col-md-4">              
                            <div class="card card-plain">
                                <div class="content">
                                    <h6>Ngày Thứ Bao Nhiêu Trong Lịch Trình Tour</h6>
                                    <div class="form-group">
                                        <input type="number" class="form-control" value="{{ $tourdetail->Ngay }}" disabled>
                                    </div>
                                    <h6> Nội Dung Lịch Trình</h6>
                                    <textarea name="noi-dung" id="" cols="50" rows="15" class="form-control" placeholder="Nhập Nội Dung" disabled> {{ $tourdetail->ghiChu }}</textarea>
                                </div>
                                <br>
                            </div>  
                    <form action="{{ route('deleteDetailTour') }}" method="post">
                        @csrf
                        <input type="hidden" name="id-tour" value="{{ $tourdetail->idTour }}">
                        <input type="hidden" name="ngay" value="{{ $tourdetail->Ngay }}">
                        <button class="btn btn-fill btn-danger btn-wd">DELETE</button>
                    </form>
                    </div>
             
                </div>
            </div>
        </div>
        </div>

        <hr>
        <hr>
    <!---------------------------------------------------------->
    @endforeach
</div> 
<br>
@endsection