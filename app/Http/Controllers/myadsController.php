<?php

namespace App\Http\Controllers;
use DB;
use App\Catalog;
use Auth;
use Image;
use Illuminate\Http\Request;

class myadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req2=DB::table('annonces')
            ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
            ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
            ->where('annonces.user_id','=',Auth::user()->id)
            ->groupBy('catalog.annonce_id')

            ->get();





        return view('myads',compact('req2'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        DB::table('annonces')
            ->where('id', $request['id'])
            ->update(['title' => $request['title'],'description'=>$request['description'],'price'=>$request['price']]);




        $avatar=$request->file('imgAn');

        $filename=time(). '.' . $avatar->getClientOriginalExtension();


        Image::make($avatar)->resize(300,300)->save(public_path('/annonceImg/' .$filename));
        DB::table('catalog')
            ->where('id',$request['id'])
            ->update(['urlimg'=>'annonceIMG/'.$filename]);

      return  redirect('myads');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table('catalog')->where('annonce_id', '=', $id)->delete();
        DB::table('annonces')->where('id', '=', $id)->delete();
        return redirect('myads');
    }
}
