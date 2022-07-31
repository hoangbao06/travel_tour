@extends('layout1.app')

@section('content')


<div class="header-3">
	
	<div class="page-carousel">
		<div class="filter"></div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="page-header" style="background-image: url('{{ URL::to($tour->anhTour) }}');">
					</div>
				</div>
				@foreach ($anhDetail as $AnhDetail)									
				<div class="carousel-item">
					<div class="page-header" style="background-image: url('{{ URL::to($AnhDetail->anh) }}')">			
					</div>
				</div>
				@endforeach
			</div>

			<a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="fa fa-angle-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="fa fa-angle-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>
	
<div class="row">
	<div class="col-md-12">
		<h4 class="text-center">BẢNG GIÁ TOUR</h4>
		<br>
	</div>
	<div class="col-md-10 ml-auto mr-auto">
		<div class="table-responsive">
		<table class="table table-shopping">
			<thead>
				<tr>
					<th class="text-center"></th>
					<th></th>
					<th class="text-right">Giá / Người</th>
					<th class="text-right">Số Lượng</th>
					<th class="text-right">Ghi Chú</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						
					</td>
					<td class="td-product">
						<strong>Giá Người Lớn</strong>
						<p>
						Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
					</td>

					<td class="td-price">
						<h5>{{ $tour->giaNguoiLon }}</h5>
					</td>
					<td class="td-number td-quantity">
						1
						
					</td>
					<td class="td-number">
						
					</td>
				</tr>
				<tr>
					 <td>
						
					</td>
					<td class="td-product">
						<strong>Giá Trẻ Em</strong>
						<p>Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
					</td>

					<td class="td-price">
						<h5>{{ $tour->giaTreEm }}</h5>
					</td>
					<td class="td-number td-quantity">
						1
						
					</td>
					<td class="td-number">
						<p>Trẻ Em > 10t </p>
					</td>
				</tr>
				<tr>
					<td>
					   
				   </td>
				   <td class="td-product">
					   <strong>Giá Trẻ Nhỏ</strong>
					   
				   </td>

				   <td class="td-price">
					   <h5>Free</h5>
				   </td>
				   <td class="td-number td-quantity">
					   
				   </td>
				   <td class="td-number">
					   <p>Trẻ Em < 10t </p>
				   </td>
			   </tr>

				<tr class="tr-actions">
				   <td colspan="3"></td>
				   @if (Session::exists('idUSER'))
				   <td colspan="2" class="text-right">
					<form action="{{ route('reserveTour.store') }}" method="post">
					 @csrf
						<input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
						<input type="hidden" name="id-khachhang" value="{{ $idKhachHang }}">
						<button  class="btn btn-danger btn-lg">Thêm Vào Giỏ Tour<i class="fa fa-chevron-right"></i></button>
				 </form>	
				 </td>
				<td colspan="2" class="text-right">
					<form action="{{ route('datTourNhanh') }}" method="get">
						   <input type="hidden" name="id-tour" value="{{ $tour->idTour }}">
						   <input type="hidden" name="id-khachhang" value="{{ $idKhachHang }}">
						   <button  class="btn btn-danger btn-lg">ĐẶT TOUR NGAY<i class="fa fa-chevron-right"></i></button>
					</form>
				</td> 
				   @else
				   <td colspan="2" class="text-right">
					<a class="btn btn-danger btn-lg" href="{{ route('loginUSER') }}">Đăng Nhập Để Đặt Tour<i class="fa fa-chevron-right"></i></a>
					</td> 
				   @endif
				   
				</tr>
			</tbody>
		</table>
		</div>
		<br>
		<div class="table-responsive">
			<h4 class="text-center">Bao Gồm Trong Tour</h4>
			<br>
			<table class="table table-shopping">
				<thead>
					<tr>
						<th class="text-center"></th>
						<th></th>
						<th class="text-right">Tên</th>
						<th class="text-right">Hãng</th>
						<th class="text-right"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							
						</td>
						<td class="td-product">
							<strong>Vé Máy Bay</strong>
							<p>
							Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
						</td>
	
						<td class="td-price">
							<h5>{{ $tour->nameMayBay }}</h5>
						</td>
						<td class="td-number td-quantity">
							{{ $tour->hangMayBay }}
						</td>
						<td class="td-number">
							
						</td>
					</tr>
					<tr>
						 <td>
							
						</td>
						<td class="td-product">
							<strong>Khách Sạn</strong>
							<p>Giá Vé Đã Bao Gồm Các Chi Phí Khác Và Thuế</p>
						</td>
	
						<td class="td-price">
							<h5>{{ $tour->nameKhachSan }}</h5>
						</td>
						<td class="td-number td-quantity">
							
							
						</td>
						<td class="td-number">
							
						</td>
					</tr>
					
				</tbody>
			</table>
			</div>
	</div>
</div>

<br>

<div class="row">
	<div class="col-md-10 ml-auto mr-auto">
		<div class="text-center">
			<span class="label label-warning main-tag">Lịch Trình</span>
			<h3 class="title">Lịch Trình Tour : {{ $tour->nameTour }}</h3>
			<h6 class="title-uppercase">Ngày Khởi Hành : {{ $tour->ngayKhoiHanh }} --- Ngày Kết Thúc : {{ $tour->ngayKetThuc }}</h6>
		</div>
	</div>
</div>

<br>
<hr>
@foreach ($tourDetail as $TourDetail)
	
<div class="row">
	<div class="col-md-10 ml-auto mr-auto">
		<div class="text-center">
			<span class="btn btn-success btn-round">Ngày {{ $TourDetail->Ngay }}</span>
			<a href="javascrip: void(0);"><h3 class="title">Chương Trình Tour Ngày {{ $TourDetail->Ngay }} </h3></a>
			<h6 class="title-uppercase">{{ $TourDetail->diemXuatPhat }} --- {{ $TourDetail->diemDen }}</h6>
		</div>
	</div>
	<div class="col-md-8 ml-auto mr-auto">
		
			<div class="card-image">
				<img src="{{ URL::to($TourDetail->anh) }}" width="900px">
			</div>
			<br>
			<p class="image-thumb text-center">Ảnh {{ $TourDetail->diemXuatPhat }} - {{ $TourDetail->diemDen }}</p>
		
		<div class="article-content">
			<h4>{{ $TourDetail->diemXuatPhat }} - {{ $TourDetail->diemDen }}</h4>
			<h4>Giờ Bắt Đầu: {{ $TourDetail->gioBatDau }} - Giờ Đến :{{ $TourDetail->gioDen }}</h4>
			<br>
			<p> {{ $TourDetail->ghiChu }}</p>
		</div>
		<br/>		
		<hr>	
	</div>
</div>
@endforeach






{{-- <div class="wrapper">
	<div class="section text-center landing-section">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<h2 class="title">Let's talk product</h2>
					<h5>This is the paragraph where you can write more details about your product. Keep you user engaged
						by providing meaningful information. Remember that by this time, the user is curious, otherwise
						he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
					<br />
					<a href="#paper-kit" class="btn btn-danger btn-fill btn-round">See Details</a>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-palette"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Beautiful Gallery</h4>
							<p class="description">Spend your time generating new ideas. You don't have to think of
								implementing.</p>
							<a href="#pkp" class="btn btn-link btn-danger">See more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-bulb-63"></i>
						</div>
						<div class="description">
							<h4 class="info-title">New Ideas</h4>
							<p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
							<a href="#pkp" class="btn btn-link btn-danger">See more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-chart-bar-32"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Statistics</h4>
							<p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
							<a href="#pkp" class="btn btn-link btn-danger">See more</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="info">
						<div class="icon icon-danger">
							<i class="nc-icon nc-sun-fog-29"></i>
						</div>
						<div class="description">
							<h4 class="info-title">Delightful design</h4>
							<p>Find unique and handmade delightful designs related items directly from our sellers.</p>
							<a href="#pkp" class="btn btn-link btn-danger">See more</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div> --}}





@endsection