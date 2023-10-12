<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function index (){
        $hotels=Hotel::all();
return view('hotel',compact('hotels'));
    }
    public function edit(){

    }
    public function delete(){

    }
}
