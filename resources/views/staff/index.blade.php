@extends('layout.app')


@section('content')
<br>
<div class="text-right">
	<a href="{{ route('staff.create') }}" class="btn btn-danger btn-fill btn-wd">Create Account</a>
</div>
  <!--- form tìm kiếm --->
  <div>
	<form class="navbar-form navbar-left navbar-search-form" role="search">
		<button class="btn btn-wd btn-warning btn-fill btn-magnify">Search</button>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-search"></i></span>
			<input type="text" value="{{ $search }}" name="search" class="form-control" placeholder="Search...">
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
											<th>idStaff</th>
											<th>Name</th>
											<th>Email</th>
											<th>PassWord</th>
											<th>Quyền</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									@foreach ($nhanvien as $NhanVien)


									<tbody>
										<tr>
											<td class="text-center">{{ $NhanVien->idNhanVien }}</td>
											<td>{{ $NhanVien->nameNhanVien }}</td>
											<td>{{ $NhanVien->email}}</td>
											<td>***********</td>
											<td>{{ $NhanVien->nameQuyen }}</td>
											<td><a href="{{ route('staff.edit', $NhanVien->idNhanVien) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
											<td><form method="post" action="{{ route('staff.destroy', $NhanVien->idNhanVien) }}">
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
					<div class="text-center">
						{{ $nhanvien->appends(['search'=>$search])->links() }}
					</div>
				</div>
			</div>
		</div>

@endsection
