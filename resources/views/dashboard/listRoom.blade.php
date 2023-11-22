@extends('dashboard.fe')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Loại phòng</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Số phòng trống</th>
            <th scope="col">Số người</th>
            <th scope="col">Giá phòng</th>
            <th scope="col">Giá giảm</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php $num =0; ?>
        @foreach(\Illuminate\Support\Facades\Auth::user()->hotel->types as $type)
            <?php ++$num ?>
        <tr>
            <th scope="row">{{$num}}</th>
            <td>{{$type->name}}</td>
            <td>{{$type->quantity}}</td>
            <td>0</td>
            <td>{{$type->person_number}}</td>
            <td>{{number_format($type->price)}}</td>
            <td>{{number_format($type->price_sale)}}</td>
            <td>
                <a>
                    <button class="btn-primary">Sửa</button>
                </a>
                <a>
                    <button class="btn-danger">Xóa</button>
                </a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
