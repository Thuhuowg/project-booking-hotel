@extends('layoutClient.feType')
@section('title','tour-21')
@section('content')
    @foreach($types as $type)
    <div class="untree_co-section" style="padding: 20px; background-color: #f8f9fa">
        <a href="{{route('type',['id'=>$type->id])}}">
            <div class="container">
                <div class="row hero p-5" style="border: 5px solid #ffff; border-radius: 20px;background-color: #f8f9fa;box-shadow: 0 30px 40px rgba(0,0,0,.1)">
                    <div class="col-sm-4 " >
                        <img src="{{asset('images/HANZ Hanoi de Maison Grand11.jpg')}}" height="300px" width="300px">
                    </div>

                    <div class="col-sm-8 m-0" >
                        <div class="m-0" style="height: 30px"><h3>{{$type->name}}</h3></div>
                        <br>
                        <div>{!! $type->description !!}</div>
                        <br>
                        <br>
                        <br>
                        <div style="padding: 0px 15px; width: 660px;float: left">
                            <div>
                                <div>số người: {{$type->person_number}}</div>
                                <div>Giá: {{$type->price_id}}VNĐ </div>
                            </div>
                            <div class="justify-content-end" style="float: right">
                                <button href="booking.html" class="btn btn-outline-dark btn-md font-weight-bold mt-3">Xem chi tiết </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </a>
    </div>
    @endforeach
@endsection
