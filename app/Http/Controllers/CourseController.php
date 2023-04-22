<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses    = Course::visible()->get();

        return view("courses.index", ["courses" => $courses]);
    }


    public function show($slug)
    {
        $course    = Course::where('slug', $slug)
                    ->Visible()
                    ->first();




        if (!$course) {
            abort(404);
        }

        return view("courses.show", compact("course"));
    }
}
