<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;
use App;

use App\CatSubCat;
use App\MenuItem;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
//this is the function that will display my main categories
    public function main()
    {
        $maincat = App\CatSubCat::where('cat_call',"")->get();
        return view('main', compact('maincat'));
    }

//this is the function that will display my subcategories
    public function sub(CatSubCat $id)
    {
        $subcat = App\CatSubCat::where('cat_call', $id->id)->get();
        return view('sub', compact('id', 'subcat'));
    }

//this is the function that will display my products
    public function prod(CatSubCat $id)
    {
        $subcat = App\MenuItem::where('sub_call', $id->sub_id)->get();
        return view('prod', compact('id', 'subcat'));
    }
}
