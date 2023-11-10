@extends('app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel CRUD Image Upload</h2>
            </div>
            <div class="pull-right" style="margin-bottom: 10px">
                <a href="{{ url('create') }}" class="btn btn-success">Thêm mới sản phẩm</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Hình ảnh SP</th>
            <th>Tên Sản phẩm</th>
            <th>Chi tiết</th>
            <th width="280px">Hành động</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="./images/{{ $product->image }}" width="100px" alt="Hình ảnh sản phẩm"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->detail }}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="POST">
                        <a href="{{ route('show', $product->id) }}" class="btn btn-info">Chi tiết</a>
                        <a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Chỉnh sửa</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xoá</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}
@endsection
