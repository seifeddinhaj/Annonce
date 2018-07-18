<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categories;
use App\Annonce;

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
        ->where('categories.type','=','vehicles')
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
      /*  $annonce= new Annonce();
        $annonce->title= $request['type'];
        $annonce->description= $request['description'];
        $annonce->price= $request['price'];
        $annonce->type= 'for sale'
        $annonce->adresse= $request['location'];
        $annonce->user_id= Auth::user()->id;


        $annonce->categories_id= $request['categories'];
        $annonce->subcategory_id= $request['subcategory'];*/
       // $annonce->created_at= $request['description'];
        //$annonce->updated_at= $request['description'];

        $annonce= new Annonce();
        $annonce->title= 'new carrr';
        $annonce->description= 'fiat 500';
        $annonce->price= 548712;
        $annonce->type= 'for sale';
        $annonce->adresse= 'Tunis';
        $annonce->user_id= Auth::user()->id;


        $annonce->categories_id= 1;
                $annonce->subcategory_id= 1;
    // add other fields
    $annonce->save();
                return redirect('welcome');

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
