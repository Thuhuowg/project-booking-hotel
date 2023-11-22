
@extends('layoutClient.feHome')
@section('title','Khách sạn')
@section('content')

    @foreach($hotels as $hotel)
<div class="untree_co-section" style="padding: 20px">
    <a href="{{route('hotel',['id'=>$hotel->id])}}">
    <div class="container">
        <div class="row hero text-white p-5 " style="box-shadow: 0 30px 40px rgba(0,0,0,.1);border-radius: 10px">
          <div class="col-sm-4 " >
              <img src="{{asset($hotel->image_path)}}" height="300px" width="300px" >
          </div>

            <div class="col-sm-8 m-0" >
                <div class="m-0" style="height: 30px"><h3>{{$hotel->name}}</h3></div>
                <div class="mt-2" >Địa chỉ:  {{$hotel->address}}</div>
                <br>
                <div>{{$hotel->description}}</div>
                <div>
                    <button href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold mt-3">Xem ngay </button>
                </div>

            </div>

        </div>
    </div>
    </a>
</div>
    @endforeach

@endsection
