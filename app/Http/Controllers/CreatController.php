<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Subcategory;
use DB;
use Illuminate\Support\Facades\Input;

class CreatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexx(Request $request)
    {
        $req=Categories::all();
        //$select=$type;
       $select=$request->all();
        //$select=$request->all();
      //  $select = $request->input('categories');
       $data =DB::table('categories')
       ->join('subcategory', 'categories.id', '=', 'subcategory.categories_id')
        ->where('categories.type','=','Buildings')
        ->get();
        return view('creat',compact('req','data','select'));

    }
    function fetch (Request $request){
        $select=$request->all();
       $data =DB::table('subcategory')
        ->where('categories_id','=',$select)
        ->get();
         return view('creat',compact('data','select'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcat($id)
    {
       // $req1=Categories::all();
        //return view('creat',compact('req1'));
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
