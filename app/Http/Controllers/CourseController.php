<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data = require(database_path() ."/data.php");
        return view("courses.index", ["courses" => $data["courses"]]);
    }


    public function show($slug)
    {
        $data = require(database_path() ."/data.php");

        $index = array_search($slug, array_column($data["courses"], "slug"));

        if ($index === false) {
            return "404 NOT FOUND";
        }
        $course = $data["courses"][$index];
        return view("courses.show", compact("course"));
    }
}
