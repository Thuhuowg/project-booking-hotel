@extends('layoutClient.feHome')
@section('title','Đăng ký')
@section('content')
    <div class="col-sm-4 mb-5" style="margin: 0px auto">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{route('home')}}"><b>Tour-21</b></a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Đăng ký</p>
                <form action="{{route('register')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="full_name">Nhập họ và tên</label>
                        <input type="text" class="form-control" id="full_name" placeholder="Họ và tên" name="full_name">

                    </div>

                    <div class="mb-3 " style="display: flex; gap: 100px; ">
                        <div>Giới Tính</div>
                       <label for="men"> <input type="radio" id="men" name="gender" value="Nam"> Nam</label>
                        <label for="woman"><input type="radio" id="woman" name="gender" value="Nữ"> Nữ</label>

                    </div>
                    <div class="group mb-3">
                        <div>Nhập ngày sinh</div>
                        <input type="date" class="form-control" max="2006-01-01" name="birthday">
                    </div>
                    <div class="mb-3">
                        <label for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" placeholder="Địa chỉ" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="phone">Số điện thoại </label>
                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email">Nhập Email </label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">

                    </div>
                    <div class="mb-3">
                        <label for="password">Nhập mật khẩu </label>
                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password">

                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="confirm_password">Xác nhận mật khẩu </label>--}}
{{--                        <input type="password" class="form-control" id="confirm_password" placeholder="Xác nhận mật khẩu" name="confirm_password">--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col-6">

                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                        </div>

                    </div>
                </form>
                <div class="social-auth-links text-center">
                    <hr>
                </div>
                <a href="{{route('login')}}" class="text-center">Bạn đã có tài khoản? </a>
            </div>

        </div>
    </div>
    </div>
@endsection
