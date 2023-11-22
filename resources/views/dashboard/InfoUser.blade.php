
@extends('dashboard.fe')
@section('title','Thông tin tài khoản')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Thông tin tài khoản </h3>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <th>Mã NV</th>
                            <td>BP-21</td>
                   </tr>


                        <tr>
                            <th>Họ và tên</th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->full_name}}</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->birthday}}</td>
                        </tr>
                        <tr>
                            <th>Giới tính </th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->gender}}</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ </th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->address}}</td>
                        </tr>
                        <tr>
                            <th>SĐT</th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{\Illuminate\Support\Facades\Auth::user()->email}}</td>
                        </tr>

                    </table>

                </div>

            </div>
            <button type="button" class="col btn btn-block btn-primary d-flex" style="width: 100px;height: 40px">Chỉnh sửa </button>
        </div>
    </div>
@endsection
