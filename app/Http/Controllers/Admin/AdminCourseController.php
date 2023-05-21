<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminCourseController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Course::class, 'course', [
            "except" => ["create"]
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        $courses = Course::query();

        if($user->role !== "admin") {
            $courses =  $courses->whereBelongsTo($user, 'instructor')->withCount("students")->paginate(20);
        } else {
            $courses = $courses->withCount("students")->paginate(20);
        }


        return view("admin.courses.index", compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.courses.create", compact("categories"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:3|unique:courses',
            'category_id'   => 'required',
            'price'         => 'required',
            'level_name'    => 'required',
            'gradient'      => 'required',
            'duration'      => 'required',
            'embed'      => 'required',
        ]);

        $course = new Course();
        $course->name = $request->name;
        $course->slug = Str::slug($request->name);
        $course->category_id = $request->category_id;
        $course->level = $request->level_name;
        $course->price = $request->price;
        $course->gradient = $request->gradient;
        $course->description = $request->description;
        $course->is_visible = $request->is_visible;
        $course->duration = $request->duration;
        $course->embed = $request->embed;
        $course->instructor_id = Auth::id();
        $course->save();
        return redirect()->back()->with("success", "Course Added Successfully");
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
    public function edit(Course $course)
    {

        $categories = Category::all();
        return view("admin.courses.edit", compact("categories", "course"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {

        $request->validate([
            'name'          => 'required|min:3|unique:courses,name,'.$course->id,
            'category_id'   => 'required',
            'price'         => 'required',
            'level_name'    => 'required',
            'gradient'      => 'required',
            'duration'      => 'required',
            'embed'      => 'required'
        ]);


        $course->name = $request->name;
        $course->slug = Str::slug($request->name);
        $course->category_id = $request->category_id;
        $course->level = $request->level_name;
        $course->price = $request->price;
        $course->gradient = $request->gradient;
        $course->description = $request->description;
        $course->is_visible = $request->is_visible;
        $course->duration = $request->duration;
        $course->embed = $request->embed;
        $course->save();
        return redirect()->back()->with("success", "Course Updated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {

        if($course->chapters()->exists()) {
            return redirect()->route("admin.courses.index")->withSuccess("Cannot delete course with has lessons");
        }

        $course->delete();
        return redirect()->route("admin.courses.index")->withSuccess("course Deleted successfully");

    }

    public function addchapter($id)
    {
        $course = Course::with("chapters.lessons")->findOrFail($id);
        $this->authorize("update", $course);

        return view("admin.courses.addcontent", compact("course"));
    }


      public function storechapter(Request $request, $id)
      {

          $course = Course::with("chapters.lessons")->findOrFail($id);
          $this->authorize("update", $course);

          $request->validate([
                 'name' => 'required|min:3|unique:lessons',
            ]);


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

            $course = Course::with("chapters.lessons")->findOrFail($id);
            $this->authorize("update", $course);

            $request->validate([
                   'name' => 'required|min:3|unique:lessons',
                   'embed' => 'required',
                   'is_visible' => 'required',
              ]);

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
