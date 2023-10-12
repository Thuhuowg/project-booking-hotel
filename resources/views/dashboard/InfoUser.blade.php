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
                            <td>Nguyễn T Thu Hương</td>
                        </tr>
                        <tr>
                            <th>Ngày sinh</th>
                            <td>14/04/2003</td>
                        </tr>
                        <tr>
                            <th>Giới tính </th>
                            <td>Nữ</td>
                        </tr>
                        <tr>
                            <th>Địa chỉ </th>
                            <td>Thanh trì, Hà nội</td>
                        </tr>
                        <tr>
                            <th>SĐT</th>
                            <td>03345482931</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>huogthu552@gmail.com</td>
                        </tr>

                    </table>

                </div>

            </div>
            <button type="button" class="col btn btn-block btn-primary d-flex" style="width: 100px;height: 40px">Chỉnh sửa </button>
        </div>
    </div>
@endsection
