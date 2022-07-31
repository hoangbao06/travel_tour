@extends('layout.app')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="post" action="{{ route('position.store') }}">
                        @csrf
                        <div class="card-header">
                            <h4 class="card-title">
                                ADD POSITION
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <label>Name Position</label>
                                <input type="text" placeholder="Tên Vị Trí" class="form-control" name="name-position">
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
                <input type="text" value="{{ $search }}" name="search" class="form-control" placeholder="Search...">
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
                            <h4 class="card-title">LIST OF POSITION</h4>
                            <p class="category">Information here</p>
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">idPosition</th>
                                        <th>Name Position</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                    @foreach ($listPosition as $position)
                                    <tr>
                                        <td class="text-center">{{ $position->idQuyen }}</td>
                                        <td >{{ $position->nameQuyen }}</td>
                                        <td class="td-actions text-right"><a href="{{ route('position.edit',$position->idQuyen) }}"><button class="btn btn-sm btn-fill">UPDATE</button></a></td>
                                        <td class="td-actions text-right">
                                            <form action="{{ route('position.destroy', $position->idQuyen) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-sm btn-fill">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>  
                                    @endforeach                                
                                </tbody>
                               
                            </table>
<div class="text-center">
    {{ $listPosition->appends(['search'=>$search])-> links() }}
</div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


