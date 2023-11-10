@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chỉnh sửa sản phẩm</h2>
            </div>
            <div class="pull-right">
                <a href="{{ route('index') }}" class="btn btn-primary">Trở về</a>
            </div>
        </div>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tên sản phẩm:</strong>
                    <input name="name" type="text" class="form-control" placeholder="Tên sản phẩm"
                        value="{{ $product->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Chi tiết sản phẩm</strong>
                    <textarea name="detail" id="detail" class="form-control" style="height: 150px" placeholder="Chi tiết sản phẩm">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hình ảnh sản phẩm</strong>
                    <input type="file" class="form-control" name="image" placeholder="Hình ảnh">
                    <img src="/images/{{ $product->image }}" width="300px" alt="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-primary">Lưu sản phẩm</button>
            </div>
        </div>
    </form>
@endsection
