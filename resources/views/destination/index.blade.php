@extends('layout.app')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('destination.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">
                                ADD DESTINATION
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>Name Destination</label>
                                <input type="text" placeholder="Tên Địa Điểm" class="form-control" name="ten-diadiem">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">         
                                    <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                    <input type="file" name="image">
                                </p>
                                </div>
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-fill btn-info">ADD</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <!--- form tìm kiếm --->
     <div>
        <form class="navbar-form navbar-left navbar-search-form" role="search">
            <button class="btn btn-wd btn-warning btn-fill btn-magnify">Search</button>
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" value="{{ $search }}" name="search" class="form-control" placeholder="Search Tên Khách Sạn">
             </div>
         </form>
    </div>
<!------------------>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">LIST OF DESTINATION</h4>
                            <p class="category">Information here</p>
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">idDestination</th>
                                        <th>Name Destination</th>
                                        <th>Image</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($diadiem as $DiaDiem)
                                    
                                
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $DiaDiem->idDiaDiem }}</td>
                                        <td>{{ $DiaDiem->tenDiaDiem }}</td>
                                        <td><img src="{{ $DiaDiem->anh }}" width="120px"></td>
                                        <td><a href="{{ route('destination.edit', $DiaDiem->idDiaDiem) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
                                        <td class="td-actions text-right">
                                           <form method="post" action="{{ route('destination.destroy', $DiaDiem->idDiaDiem ) }}">
                                            @method('DELETE')
                                            @csrf
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
            <div class="text-center">
                {{ $diadiem->appends(['search'=>$search])->links() }}
            </div>
@endsection


