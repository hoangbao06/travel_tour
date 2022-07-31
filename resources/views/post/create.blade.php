@extends('layout.app')

@section('content')
<div class="wrapper wrapper-full-page">
<div class="content">
    <div class="container">
        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="header-text">
                    <h2>Thêm Bài Viết</h2>
                    <hr>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2">
                <div class="content">
                    
                    <div class="form-group">
                        <h6>Tiều Đề</h6>
                        <textarea name="tieu-de" cols="48" rows="5" class="form-control" placeholder="Nhập Tiêu Đề Tại Đây"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Tóm Tắt</h6>
                        <textarea name="tom-tat" cols="48" rows="5" class="form-control" placeholder="Nhập Tóm Tắt Tại Đây"></textarea>
                    </div>
                    <div class="form-group">
                        <h6>Ảnh Tour</h6>
                        <div class="row">
                            <div class="col-sm-6">         
                                <p class="btn btn-danger btn-fill btn-wd">Choose Image                                                     
                                <input type="file" name="image">
                            </p>
                            </div>
                        </div>
                    </div>   
                                  
                </div>
            </div>
            <div class="col-md-4">                  
                    <div class="form-group">
                        <h6>Nội Dung </h6>
                        <textarea name="noi-dung" cols="48" rows="10" class="form-control" placeholder="Nhập nội dung tour "></textarea>
                    </div>             
            </div>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-fill btn-danger btn-wd">Create
                Tour</button>
        </div>
    </form>
    </div>

</div>
</div>
<br>
@endsection