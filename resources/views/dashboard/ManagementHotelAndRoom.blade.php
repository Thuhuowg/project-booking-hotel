@extends('dashboard.fe')
@section('title')
    Quản lý khách sạn và phòng
@endsection
@section('content')

    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Thêm phòng </h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->

        <form>
            @csrf
        <div class="card-body">
            <div class="row">


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Khu vực</label>
                        <div>Hà nội</div>
{{--                        <button type="button" class="btn btn-info mt-3">--}}
{{--                            <i class="fas fa-plus"></i>--}}
{{--                        </button>--}}
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Khách sạn</label>
                        <div>HANZ Hanoi de Maison Grand</div>
                    </div>
                    <!-- /.form-group -->

                </div>
                <!-- /.col -->
                </div>
            <!-- /.row -->
            <div class="row">


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Chọn loại phòng</label>
                        <select class="form-control select2bs4" style="width: 100%;">
                                <option selected="selected"></option>
                                {{--                            <option>Alaska</option>--}}
                                {{--                            <option>California</option>--}}
                                {{--                            <option>Delaware</option>--}}
                                {{--                            <option>Tennessee</option>--}}
                                {{--                            <option>Texas</option>--}}
                                {{--                            <option>Washington</option>--}}
                        </select>
                        {{--                        <button type="button" class="btn btn-info mt-3">--}}
                        {{--                            <i class="fas fa-plus"></i>--}}
                        {{--                        </button>--}}
                    </div>
                    <!-- /.form-group --><div class="form-group ms-3">
                        <div class="small" >Thêm loại phòng</div>
                        <input type="text" class="form-control" placeholder="Nhập loại phòng">
                    </div>
                </div>

            </div>
            <div class="col-sm-12">

                <div class="form-group">
                    <label>Số lượng</label>
                    <input type="number" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="col-sm-2 float-right mb-3 mt-3 justify-content-center">
                <div class="row d-flex" style="gap: 5px">
                    <button type="button" class="col btn btn-block btn-outline-primary">Gửi </button>
                    <button type="button" class="col mt-0 btn btn-block btn-outline-secondary">Hủy</button>
                </div></div>
        </div>

        </form>

        <!-- /.card-body -->

@endsection
