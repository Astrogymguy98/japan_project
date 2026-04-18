<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CurrySet;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $curry_sets = CurrySet::all();
        
         return view("frontend.home");
    }

}
