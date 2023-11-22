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

        <form method="post" action="{{route('create-type')}}">
            @csrf

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Khu vực</label>
                        <div>
                            <select class="form-control" readonly="1"  disabled="1">
                                <option value="{{\Illuminate\Support\Facades\Auth::user()->hotel->province->id}}">{{\Illuminate\Support\Facades\Auth::user()->hotel->province->name}}</option>
                            </select>
                        </div>
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
                        <div>
                            <select name="hotel_id" class="form-control" readonly="1">
                                <option value="{{\Illuminate\Support\Facades\Auth::user()->hotel->id}}">{{\Illuminate\Support\Facades\Auth::user()->hotel->name}}</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.form-group -->

                </div>
                <!-- /.col -->
                </div>
            <!-- /.row -->
            <div class="row">


                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Thêm loại phòng</label>
                        <input type="text" class="form-control" placeholder="nhập tên loại phòng" name="name">
                    </div>
{{--                    <!-- /.form-group --> <div class="col-sm-1 float-left mb-3 mt-3 justify-content-center">--}}
{{--                        <div class="row d-flex" style="gap: 5px">--}}
{{--                            <button type="button" class="col mt-0 btn btn-block btn-primary">+</button>--}}
{{--                        </div></div>--}}
                </div>

            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="description"> Mô tả </label>
                        <textarea id="summernote" name="description" class="form-control" placeholder="mô tả về loại phòng"></textarea>
                    </div>
                    <div class="form-group ">
                        <label>Tải nhiều ảnh </label>
                        <div class="input-group mb-3">
                            <input type="hidden" name="image_list" id="image_list" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_list">
                                <i class="fas fa-folder-open"></i>
                            </button>
                        </div>
                        <div class="row" id="show_image_list">

                        </div>

                    </div>
                </div>
                <div class="col-sm-3">
                <div class="form-group">
                    <label>Số lượng phòng</label>
                    <input type="number" name="quantity" class="form-control" placeholder="Enter ...">
                </div>
                    <div class="form-group">
                        <label>Số người </label>
                        <input type="number" name="person_number" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Giá phòng </label>
                        <input type="number" name="price" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label for="price_sale">Giá phòng (sale) </label>
                        <input type="number" id="price_sale" name="price_sale" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group ">
                        <label>Tải ảnh </label>
                        <div class="input-group mb-3">
                        <input type="text" name="image" id="image" class="form-control" placeholder="Tải ảnh" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-folder-open" ></i>
                        </button>
                        </div>
                        <img src="" id="show_img" style="width: 100%;" >
                    </div>

            </div>
            </div>
            <div class="col-sm-2 float-right mb-3 mt-3 justify-content-center">
                <div class="row d-flex" style="gap: 5px">
                    <button type="submit" class="col btn btn-block btn-outline-primary">Gửi </button>
                    <a href="#"><button type="" class="col mt-0 btn btn-block btn-outline-secondary">Hủy</button></a>
                </div>
            </div>
        </div>

        </form>

        <!-- /.card-body -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="{{url('http://127.0.0.1:8000/file/dialog.php?field_id=image')}}" style="width: 100%; height:500px; overflow-y: auto; border: none"  ></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- model -->
        <div class="modal fade" id="modal_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-custom" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="listModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe src="{{url('http://127.0.0.1:8000/file/dialog.php?field_id=image_list')}}" style="width: 100%; height:500px; overflow-y: auto; border: none"  ></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
@endsection

@section('js')
            <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

            <script>
                $(function () {
                    // Summernote
                    $('#summernote').summernote({
                        height: 250,
                    })

                });
                $('#exampleModal').on('hide.bs.modal',event =>{
                    var _link = $('input#image').val();
                    var _img = "{{url('/uploads')}}" + '/' + _link;
                    $('img#show_img').attr('src',_img);
                });

                $('#modal_list').on('hide.bs.modal',event =>{
                    var _links = $('input#image_list').val();
                    var _args = $.parseJSON(_links);
                    var _html = '';
                    for (let i = 0; i < _args.length; i++) {
                        let _url = "{{url('/uploads')}}" + '/' + _args[i];
                        _html += '<div class="col-md-4">';
                        _html += '<img src="'+_url+'" alt="" style="width: 100%;" >'
                        _html += '</div>';
                    }

                    $('#show_image_list').html(_html);
                });

            </script>


@endsection
