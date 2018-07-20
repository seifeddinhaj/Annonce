<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Categories;
use App\Annonce;
use App\Catalog;
use App\Subcategory;
use DB;
use Image;
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


    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $subcat = DB::table("subcategory")
         ->select("id","type")
                    ->where("categories_Id",'=',$id)
                    ->get();
                   /* $s="";
                    foreach ($subcat as $c ) {

                        $s.='<option value="'. $c->id.'">'.$c->type.'</option>';

                    }*/
          //return $s;         
        return   \Response::json($subcat);
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
       $annonce= new Annonce();
       
        $annonce->title= $request['title'];
        $annonce->description= $request['description'];
        $annonce->price= $request['price'];
        $annonce->type= $request['type'];
        $annonce->adresse= $request['location'];
        $annonce->user_id= Auth::user()->id;


        $annonce->categories_id= $request['categories'];
        $annonce->subcategory_id= $request['subcategory'];
       
    $annonce->save();


       /* $annonce= new Annonce();
        $annonce->title= 'new carrr';
        $annonce->description= 'fiat 500';
        $annonce->price= 548712;
        $annonce->type= 'for sale';
        $annonce->adresse= 'Tunis';
        $annonce->user_id= Auth::user()->id;*/

   // $id = DB::table('annonces')->orderBy('id', 'DESC')->first();

// $avatar=$request->file('imgAn');
     
        $catalog =new Catalog();
            $avatar=$request->file('imgAn');


            $filename=time(). '.' . $avatar->getClientOriginalExtension();


            Image::make($avatar)->resize(300,300)->save(public_path('/annonceImg/' .$filename));

            $catalog->annonce_id = $annonce->id;
            $catalog->urlimg='annonceImg/'.$filename;
            $catalog->save();


        
        


                return redirect('/');

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
