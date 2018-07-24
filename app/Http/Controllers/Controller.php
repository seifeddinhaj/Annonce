<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Annonce;
use App\Catalog;
use DB;
use Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()

    {
if(isset(Auth::user()->name)){
        if(Auth::user()->name=='admin'){
            return redirect('administrateur');
        }
}
        $req1=Annonce::all();
        $req2=DB::table('annonces')
        ->rightjoin('catalog', 'annonces.id', '=', 'catalog.annonce_id')
        ->select('annonces.*','catalog.urlimg','catalog.annonce_id' )
        ->groupBy('catalog.annonce_id')

        ->get();



        $req=Categories::all();
        return view('welcome',compact('req','req1','req2'));
    }
    
   
}
