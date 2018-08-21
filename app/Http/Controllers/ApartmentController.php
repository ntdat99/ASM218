<?php

namespace App\Http\Controllers;

use App\apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartment=apartment::orderBy('created_at', 'desc')->paginate(6);
        return view('admin.apartment.list')->with('list_obj',$apartment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartment.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apartment=apartment::find($id);
        if($apartment == null){
            return 'Lỗi';
        }
        return view('admin.apartment.edit')->with('edit',$apartment);
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

        $apartment = apartment::find($id);
        if($apartment == null){
            return "Lỗi";
        }

        $apartment->name = Input::get('name');
        $apartment->address = Input::get('address');
        $apartment->price = Input::get('price');
        $apartment->information = Input::get('information');
        $apartment->information_detail = Input::get('information_detail');
        $apartment->image = Input::get('image');

        $apartment->save();
        return redirect('/admin/apartment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $obj = apartment::find($id);
//        if ($obj == null) {
//            return response()->json(['error' => 'not found'], 404);
//        }
//        $obj->delete();
//        return response()->json(['message' => 'Deleted'], 200);
    }
}
