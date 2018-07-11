<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Subcategory;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SubCatController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index($id)
    {



       $column="categories_id";
        $req=Subcategory::where($column , '=', $id)->get();
        // $column="id";
        //$req1=Categories::where($column,'=',$id);
        $req1=Categories::select('type')->where('id', $id)->get();


        return view('subcat',compact('req','req1'));
    }

}