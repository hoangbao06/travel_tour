@extends('layout.app')


@section('content')
<br>
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
								<h4 class="card-title">LIST OF CUSTOMER</h4>
								<p class="category">Information here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th>idCustomer</th>
											<th>Name</th>
											<th>Email</th>											
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									
										
									@foreach ($khachHang as $khachhang)
										
									
									<tbody>
										<tr>
											<td class="text-center">{{ $khachhang->idKhachHang }}</td>
											<td>{{ $khachhang->nameKhachHang }}</td>		
											<td>{{ $khachhang->email }}</td>																			
											<td><a href="{{ route('customer.show', $khachhang->idKhachHang) }}" class="btn btn-sm btn-fill">SEE</a></td>
											<td><form method="post" action="{{ route('customer.destroy', $khachhang->idKhachHang) }}">		
												@method('DELETE')				
												@csrf
												<button class="btn btn-sm btn-fill">DELETE</button>
											</form></td>
										</tr>
	
									</tbody>
									@endforeach
								</table>
							</div>
							<div class="text-center">
								{{ $khachHang->appends(['search'=>$search])->links() }}
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

@endsection




	
	