@extends('layoutClient.feHome')
@section('title','Đăng nhập')
@section('search')
    <div class="col-sm-4 mb-5" style="margin: 0px auto">
    <div class="login-box">
        <div class="login-logo mb-3">
            <a class="justify-content-center text-white" href="{{route('home')}}"><b>Tour-21</b></a>
        </div>

        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Đăng nhập </p>
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Ghi nhớ
                                </label>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </div>

                    </div>
                </form>
<hr>
                <p class="mb-1">
                    <a href="forgot-password.html">Quên mật khẩu </a>
                </p>
                <p class="mb-0">
                    <a href="{{route('register')}}" class="text-center"> Bạn chưa có tài khoản </a>
                </p>
            </div>

        </div>
    </div>
    </div>
@endsection
