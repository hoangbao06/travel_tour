@extends('layout.app')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('hotel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">
                                ADD HOTEL
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>Name Hotel</label>
                                <input type="text" placeholder="Tên Khách Sạn" class="form-control" name="ten-khachsan">
                            </div>
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" placeholder="Miêu tả về khách sạn" rows="10" name="mieuTa-khachsan"></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <br>
                            <div class="row">
                                <div class="col-sm-6">         
                                    <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                    <input type="file" name="image">
                                </p>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-fill btn-info">ADD</button>
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
                            <h4 class="card-title">LIST OF HOTEL</h4>
                            <p class="category">Information here</p>
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">idHotel</th>
                                        <th>Name Hotel</th>
                                        <th>Discription</th>
                                        <th>Image</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($khachsan as $khachSan)                                       
                                <tbody>
                                    <tr>
                                        <td class="text-center">{{ $khachSan->idKhachSan }}</td>
                                        <td>{{ $khachSan->nameKhachSan }}</td>
                                        <td>{{ $khachSan->mieuTa }}</td>
                                        <td><img src="{{ $khachSan->anh }}" width="300px"></td>
                                        <td><a href="{{ route('hotel.edit', $khachSan->idKhachSan) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('hotel.destroy', $khachSan->idKhachSan) }}" method="post">
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
    <div class="text-center">
        {{ $khachsan->appends(['search'=> $search])->links() }}
    </div>
            
@endsection


