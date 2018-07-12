<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Annonce;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {

        $req1=Annonce::all();

        $req=Categories::all();
        return view('welcome',compact('req','req1'));
    }

}
