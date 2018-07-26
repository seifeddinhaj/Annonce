<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Annonce;
use App\Catalog;
use DB;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {if (Auth::check()) {
    // The user is logged in...


        $q=DB::table('annonces')
        ->join('users', 'annonces.user_id', '=', 'users.id')
        ->join('categories','annonces.categories_id','=','categories.id')
        ->join('subcategory','annonces.subcategory_id','=','subcategory.id')
        ->select('users.name','annonces.*','categories.type as cat','subcategory.type as sub' )
        
        
        //->distinct('catalog.annonce_id')
        ->get();

        return view('admin/administrateur',compact('q'));   
}else 
return redirect('/login');



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
    public function show($id)
    {
        
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
