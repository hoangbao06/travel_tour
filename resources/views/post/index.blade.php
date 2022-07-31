@extends('layout.app')


@section('content')
<br>
<div class="text-right">
	<a href="{{ route('post.create') }}" class="btn btn-danger btn-fill btn-wd">ADD POST</a>
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
								<h4 class="card-title">LIST OF POSTS</h4>
								<p class="category">Information here</p>
							</div>
							<div class="card-content table-responsive table-full-width">
								<table class="table">
									<thead>
										<tr>
											<th class="text-center">idBaiViet</th>
											<th class="text-center">Tiêu Đề</th>
											<th class="text-center">Ảnh</th>								
											<th class="text-center" colspan="3">Actions</th>
										</tr>
									</thead>
									
										@foreach ($baiviet as $BaiViet)                                            															
									<tbody>
										<tr>
											<td class="text-center">{{ $BaiViet->idBaiViet }}</td>
											<td class="text-center">{{ $BaiViet->tieuDe }}</td>
											<td class="text-center"><img src="{{ URL::to($BaiViet->anh) }}" width="200px"></td>						
											<td class="text-center"><a href="{{ route('post.show',  $BaiViet->idBaiViet) }}" class="btn btn-sm btn-fill">SEE</a></td>								
											<td class="text-center"><a href="{{ route('post.edit',  $BaiViet->idBaiViet) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
											<td class="text-center"><form method="post" action="{{ route('post.destroy', $BaiViet->idBaiViet) }}">
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
			
		</div>

@endsection
