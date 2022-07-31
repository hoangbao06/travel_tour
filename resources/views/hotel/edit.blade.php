@extends('layout.app')

@section('content')
<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form method="post" action="{{ route('hotel.update', $khachsan->idKhachSan) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-header">
                        <h4 class="card-title">
                            UPDATE HOTEL
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label>Name Hotel</label>
                            <input type="text" class="form-control" name="ten-khachsan" value="{{ $khachsan->nameKhachSan }}">
                        </div>
                        <fieldset>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Description</label>
                                <div class="col-sm-10" >
                                    <textarea class="form-control" rows="10" name="mieuTa-khachsan">{{ $khachsan->mieuTa }}</textarea>
                                </div>
                            </div>
                        </fieldset>
                        <button type="submit" class="btn btn-fill btn-info">UPDATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection