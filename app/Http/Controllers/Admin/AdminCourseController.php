<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::paginate(20);
        return view("admin.courses.index", compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function addchapter($id)
    {
        $course = Course::with("chapters.lessons")->findOrFail($id);
        return view("admin.courses.addcontent", compact("course"));
    }


        public function storechapter(Request $request, $id)
        {
            $request->validate([
                   'name' => 'required|min:3|unique:lessons',
              ]);

            $course = Course::with("chapters.lessons")->findOrFail($id);

            $chapter = new Lesson();
            $chapter->name = $request->name;
            $chapter->course_id = $course->id;
            $chapter->slug = Str::slug($request->name);
            $chapter->position = $request->position;
            $chapter->embed = '';
            $chapter->parent_id = null;
            $chapter->description = '';
            $chapter->is_visible = true;
            $chapter->is_free = true;
            $chapter->save();
            return redirect()->back()->with("success", "Chapter Added Successfully");

        }


          public function storelesson(Request $request, $id)
          {
              $request->validate([
                     'name' => 'required|min:3|unique:lessons',
                     'embed' => 'required',
                     'is_visible' => 'required',
                ]);

              $course = Course::with("chapters.lessons")->findOrFail($id);

              $chapter = new Lesson();
              $chapter->name = $request->name;
              $chapter->course_id = $course->id;
              $chapter->slug = Str::slug($request->name);
              $chapter->position = $request->position;
              $chapter->embed = $request->embed;
              $chapter->parent_id = $request->chapter_id;
              $chapter->description = '';
              $chapter->is_visible = $request->is_visible;
              $chapter->is_free = 1;
              $chapter->save();
              return redirect()->back()->with("success", "Lesson Added Successfully");

          }
}
