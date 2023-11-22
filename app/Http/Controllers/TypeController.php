<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    //
    public function index(){
        return view('listRoom');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        Type::create([
            'name'=>$request->name,
            'quantity'=>$request->quantity,
            'person_number'=>$request->person_number,
            'price'=>$request->price
        ]);
        try {
            return redirect()->route('room_list');
        }catch (Exception $e){
            echo "Message: " . $e->getMessage();
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Type::create($request->all())){
            return redirect()->route('room_list')->with('success','Thêm mới thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $type= Type::find($id);
        $hotel = DB::table('hotels')->join('types', 'hotels.id', '=', 'types.hotel_id')->first();
        $prices = DB::table('prices')->where('type_id',$id)->get();
        return view('type', compact('type','prices','hotel'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
