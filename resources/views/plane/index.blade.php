	@extends('layout.app')

    @section('content')
   <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form method="post" action="{{ route('plane.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4 class="card-title">
                                    ADD PLANE
                                </h4>
                            </div>
                            <div class="card-content">
                                <div class="form-group">
                                    <label>Name Plane</label>
                                    <input type="text" placeholder="Tên Máy Bay" class="form-control" name="ten-maybay">
                                </div>
                                <div class="form-group">
                                    <label>Giới Thiệu</label>
                                    <textarea name="gioi-thieu"  cols="20" rows="5" class="form-control">

                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <select class="selectpicker" data-style="btn btn-danger btn-block" title="Hãng Máy Bay" data-size="7" name="hang-maybay">
                                            <option value="VietName-Airline">VietName-Airline</option>
                                            <option value="VietJet-Airline">VietJet-Airline</option>
                                            <option value="SkyViet-Airline">SkyViet-Airline</option>
                                        </select>
                                    </div>
                                    </div>
                                <div class="row">
                                    <div class="col-sm-6">         
                                        <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                        <input type="file" name="image">
                                    </p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox">
                                        <input type="checkbox" data-toggle="checkbox" value="" checked>
                                        Vui Lòng Điền Đầy Đủ Thông Tin và Chọn file Ảnh
                                    </label>
                                </div>
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
                <input type="text" value="{{ $search }}" name="search" class="form-control" placeholder="Search Tên Máy Bay">
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
                                <h4 class="card-title">LIST OF PLANE</h4>
                                <p class="category">Information here</p>
                            </div>
                            <div class="card-content table-responsive table-full-width">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">idPlane</th>
                                            <th>Name Plane</th>
                                            <th>Hãng Airline</th>
                                            <th>Image</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    @foreach ($maybay as $mayBay)
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{ $mayBay->idMayBay }}</td>
                                            <td>{{ $mayBay->nameMayBay }}</td>
                                            <td>{{ $mayBay->hangMayBay }}</td>
                                            <td><img src="{{ $mayBay->anh }}" width="100px"></td>
                                            <td><a href="{{ route('plane.edit', $mayBay->idMayBay) }}" class="btn btn-sm btn-fill">UPDATE</a></td>
                                            <td class="td-actions text-right">
                                                <form action="{{ route('plane.destroy',$mayBay->idMayBay) }}" method="post" >
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

                            <div class="text-center">
                                {{ $maybay->appends(["search"=>$search])->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection


  