<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
                    ->firstOrFail();

        $video = Lesson::lesson()
            ->whereSlug($lessonSlug)
            ->whereCourseId($course->id)
            ->first();

        if($lessonSlug) {
            $course->students()->syncWithOutDetaching(Auth::id());
        }

        return view("courses.show", compact("course", "video"));
    }
}
