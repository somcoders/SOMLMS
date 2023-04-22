<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses    = Course::visible()->get();

        return view("courses.index", ["courses" => $courses]);
    }


    public function show($slug, $lessonSlug = null)
    {
        $course    = Course::with("chapters.lessons")
                ->where('slug', $slug)
                    ->Visible()
                    ->first();

        $video = Lesson::lesson()
            ->whereSlug($lessonSlug)
            ->whereCourseId($course->id)
            ->first();

        if (!$course) {
            abort(404);
        }


        return view("courses.show", compact("course", "video"));
    }
}
