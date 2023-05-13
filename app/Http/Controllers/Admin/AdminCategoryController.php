<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        return $this->middleware("IsAdmin")->except("index");
    }

    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.categories.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
             'name' => 'required|min:3|unique:categories',
         ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route("admin.categories.index")->withSuccess("Category saved successfully");
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
    public function edit(Category $category)
    {
        return view("admin.categories.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
                   'name' => 'required|min:3|unique:categories',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug =  Str::slug($request->name);
        $category->update();

        return redirect()->back()->withSuccess("Category saved successfully");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if($category->courses()->exists()) {
            return redirect()->route("admin.categories.index")->withSuccess("Cannot delete Category with has courses");
        }

        $category->delete();
        return redirect()->route("admin.categories.index")->withSuccess("Category Deleted successfully");
    }
}
