<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatSubCat extends Model
{
    protected $table = "catsubcats";

    public function mdestroy(CatSubCat $id) {
        // Since it's three tables and there is nothing connecting Products to Categories, this code pulls up the correct subcats and does a for loop through them to delete al associated products.
        $sub=CatSubcat::where('cat_call', $id->id)->get();
        for($i=0;$i<sizeof($sub);$i++) {
            $item[$i]=MenuItem::where('sub_call', $sub[$i]->sub_id)->delete();
        }

        CatSubcat::where('cat_call', $id->id)->delete();

        CatSubcat::where('id', $id->id)->delete();

        return Redirect::back();
    }
    public function sdestroy(CatSubCat $id) {

        MenuItem::where('sub_call', $id->sub_id)->delete();
        CatSubcat::where('sub_id', $id->sub_id)->delete();

        return Redirect::back();
    }
    public function pdestroy(MenuItem $id) {

        MenuItem::where('id', $id->id)->delete();

        return Redirect::back();
    }

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
}
