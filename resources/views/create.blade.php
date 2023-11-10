@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="pull-right">
            <a href="{{ url('/') }}" class="btn btn-primary">Trở về</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif



    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên sản phẩm:</strong>
                    <input name="name" type="text" class="form-control" placeholder="Tên sản phẩm">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Chi tiết sản phẩm</strong>
                    <textarea name="detail" id="detail" class="form-control" style="height: 150px" placeholder="Chi tiết sản phẩm"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hình ảnh sản phẩm</strong>
                    <input type="file" class="form-control" name="image" placeholder="Hình ảnh">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-primary">Thêm sản phẩm</button>
            </div>
        </div>
    </form>
@endsection
