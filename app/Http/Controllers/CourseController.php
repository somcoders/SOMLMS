<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private $data = [];

    public function __construct()
    {
        $data = require(database_path() ."/data.php");
        $this->data = $data;
    }

    public function index()
    {
        return view("courses.index", ["courses" => $this->data["courses"]]);
    }


    public function show($slug)
    {
        $index = array_search($slug, array_column($this->data["courses"], "slug"));

        if ($index === false) {
            return "404 NOT FOUND";
        }
        $course = $this->data["courses"][$index];
        return view("courses.show", compact("course"));
    }
}
