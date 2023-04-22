<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;

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
        $categories = Category::withCount("courses")->get();
        $courses    = Course::visible()->get();

        return view('home', compact("courses", "categories"));
    }
}
