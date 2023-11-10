@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>Hiển thị sản phẩm</h2>
        </div>
        <div class="pull-right">
            <a href="{{ url('/') }}" class="btn btn-primary">Trở về</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tên sản phẩm:</strong>
                {{ $product->name }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Chi tiêt</strong>
                {{ $product->detail }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hình ảnh</strong>
                <img src="/images/{{ $product->image }}" width="500px" alt="Hình ảnh sản phẩm">
            </div>
        </div>
    </div>
@endsection
