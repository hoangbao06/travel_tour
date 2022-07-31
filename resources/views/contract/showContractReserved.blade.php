@extends('layout.app')


@section('content')
<br>


	
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">LIST OF CONTRACT</h4>
								<p class="category">Information Tour here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">idContract</th>
											<th class="text-center">Tên Tour</th>
											<th class="text-center">Tên Khách Hàng</th>
											<th class="text-center">Ngày Đặt Tour</th>
											<th class="text-center">Tổng Tiền</th>
											
										</tr>
									</thead>

                                    @foreach ($hoadon as $HoaDon)                                                                          
									<tbody>
										<tr>
											<td class="text-center">{{ $HoaDon->idHoaDon }}</td>
											<td class="text-center">{{ $HoaDon->nameTour }}</td>
											<td class="text-center">{{ $HoaDon->nameKhachHang }}</td>
											<td class="text-center">{{ $HoaDon->ngayDatTour }}</td>
											<td class="text-center">{{ $HoaDon->tongTien }}</td>			
											
										</tr>	
									</tbody>
                                    @endforeach
								</table>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div>
				
			</div>
		</div>

@endsection
