<?php

namespace App\Http\Controllers;

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
        $data = require(database_path() ."/data.php");
        $courses = $data["courses"];
        $categories = $data["categories"];

        return view('home', compact("courses", "categories"));
    }
}
