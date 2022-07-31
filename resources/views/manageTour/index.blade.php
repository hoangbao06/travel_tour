@extends('layout.app')


@section('content')
<br>
<div class="text-right">
	<a href="{{ route('manageTour.create') }}" class="btn btn-danger btn-fill btn-wd">ADD TOUR</a>
</div>
  <!--- form tìm kiếm --->
  <div>
	<form class="navbar-form navbar-left navbar-search-form" role="search">
		<button class="btn btn-wd btn-warning btn-fill btn-magnify">Search</button>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input type="text" value="" name="search" class="form-control" placeholder="Search...">
		</div>
	</form>
</div>
<!------------------>
<br>

	
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">LIST OF STAFF</h4>
								<p class="category">Information here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th>idTour</th>
											<th>NameTour</th>
											<th>Điểm Xuất Phát</th>
											<th>Điểm Đến</th>
											<th>Trạng Thái</th>
											<th>Ảnh</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									
										
									@foreach ($tour as $Tour)																	
									<tbody>
										<tr>
											<td>{{ $Tour->idTour }}</td>
											<td>{{ $Tour->nameTour }}</td>
											<td>{{ $Tour->diemXuatPhat }}</td>
											<td>{{ $Tour->diemDen }}</td>
											<td>
												@if ($Tour->trangThai == 0)
													{{ 'Còn Chỗ' }}
												@else
												{{ 'Hết Chỗ' }}
												@endif
											</td>		
											<td><img src="{{ $Tour->anhTour }}" width="100px"></td>	
											<td><a href="{{ route('manageTour.show',$Tour->idTour) }}" class="btn btn-sm btn-fill">SEE</a></td>								
											<td><a href="{{ route('manageTour.edit',$Tour->idTour) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
											<td><form method="post" action="{{ route('manageTour.destroy', $Tour->idTour) }}">
												@csrf
												@method('DELETE')
												<button class="btn btn-sm btn-fill">DELETE</button>
											</form></td>
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
				{{ $tour->appends(['search'=>$search])->links() }}
			</div>
		</div>

@endsection
