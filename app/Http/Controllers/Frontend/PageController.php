<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CurrySet;
use App\Models\NaanRice;
use App\Models\SideMenu;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $curry_sets = CurrySet::all();

         return view("frontend.home", compact("curry_sets"));
    }

    public function naan()
    {
        $naans = NaanRice::all();
        return view("frontend.naan.index", compact("naans"));
    }
    public function naan_detail($slug)
   {
       $naan = NaanRice::where("slug", $slug)->first();
       return view("frontend.naan.show", compact("naan"));
   }


     public function side()
    {
        $sides = SideMenu::all();
        return view("frontend.side.index", compact("sides"));
    }



 public function side_detail($slug)
    {
        $side = SideMenu::where("slug", $slug)->first();
        return view("frontend.side.show", compact('side'));
    }




    public function curry($slug)
    {
        $curry = CurrySet::where('slug', $slug)->first();
        return view('frontend.curry', compact('curry'));
    }

}

