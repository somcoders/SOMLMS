<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses    = DB::table("courses")->where('is_visible', true)->get();

        return view("courses.index", ["courses" => $courses]);
    }


    public function show($slug)
    {
        $course    = DB::table("courses")
                    ->where('slug', $slug)
                    ->where('is_visible', true)
                    ->first();

        if (!$course) {
            abort(404);
        }

        return view("courses.show", compact("course"));
    }
}
