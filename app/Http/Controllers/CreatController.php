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

        if (Auth::check()) {
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
        }else 
return redirect('/login');

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
        if (Auth::check()) {
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




            foreach ($request->file('imgAn') as $imgAn){
                $catalog =new Catalog();




           $filename=time(). '.' . $imgAn->getClientOriginalExtension();


           Image::make($imgAn)->resize(300,300)->save(public_path('/annonceImg/' .$filename));

           $catalog->annonce_id = $annonce->id;
           $catalog->urlimg='annonceImg/'.$filename;
           $catalog->save();

            }

            return redirect('/');
        }else
  return redirect('/login');

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
