<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Subcategory;
use App\Catalog;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SubCatController extends BaseController
{
    
    public function index($id)
    {



       $column="categories_id";
        $req=Subcategory::where($column , '=', $id)->get();
        // $column="id";
        //$req1=Categories::where($column,'=',$id);
        $req1=Categories::select('*')->where('id', $id)->get();
        $q=DB::table('annonces')
        ->select('*' )
        ->where('categories_id','=',$id)
        //->distinct('catalog.annonce_id')
        ->get();
        $qq=DB::table('annonces')
        ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
        ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
        ->where('categories_id','=',$id)
        ->groupBy('catalog.annonce_id')
        //->distinct('catalog.annonce_id')
        ->get();
        //seif
        

        return view('subcat',compact('req','req1','qq'));
    }
    public function show($id,$idd)
    {
        $column="categories_id";
        $req=Subcategory::where($column , '=', $id)->get();
        // $column="id";
        //$req1=Categories::where($column,'=',$id);
        $req1=Categories::select('*')->where('id', $id)->get();
        $q=DB::table('annonces')
        ->select('*' )
        ->where('categories_id','=',$id)
        //->distinct('catalog.annonce_id')
        ->get();
        $qq=DB::table('annonces')
        ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
        ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
        ->where('categories_id','=',$id)
        ->groupBy('catalog.annonce_id')
        //->distinct('catalog.annonce_id')
        ->get();
        //seif




        $qq=DB::table('annonces')
        ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
        ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
        ->where('subcategory_id','=',$idd)
       ->groupBy('catalog.annonce_id')
        //->distinct('catalog.annonce_id')
        ->get();
        //seif
       
        return view('subcatshow',compact('req','req1','qq'));
    }

}