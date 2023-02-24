<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $courses    = DB::table("courses")->where('is_visible', true)->get();
        $categories = DB::table("categories")->get();

        return view('home', compact("courses", "categories"));
    }
}
