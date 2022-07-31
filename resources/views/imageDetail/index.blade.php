@extends('layout.app')

@section('content')

<div class="content">
    
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Ảnh Slide Tour</h4>
                <p class="category"></p>
            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Tên Tour</th>
                            <th class="text-center">IMAGE</th>
                            <th  class="text-center">Actions</th>
                        </tr>
                    </thead>    
                    @foreach ($anh as $Anh)                                                                                                                                                                                                                                                              
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $Anh->nameTour }}</td>
                            <td class="text-center"><img src="{{ URL::to($Anh->anh) }}" width="400px"></td>
                            <td class="text-center"><a href="{{ route('manageTour.show',$Anh->idTour) }}" class="btn btn-danger btn-fill btn-wd">SEE TOUR</a></td>
                        </tr>       
                    </tbody>
                    @endforeach 
                   
                </table>
            </div>
        </div>
    </div>

</div>
</div>
@endsection