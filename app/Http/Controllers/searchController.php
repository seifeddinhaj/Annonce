<?php

namespace App\Http\Controllers;
use App\Categories;
use Illuminate\Http\Request;
use DB;

class searchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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


    public function show(Request $request)

    {
        $req=Categories::all();

        $key=$request['search'];

        $req2=DB::table('annonces')
            ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
            ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
            ->where('annonces.title','like','%'.$key.'%')
            ->groupBy('catalog.annonce_id')

            ->get();



        return view('search',compact('req','req2'));
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
