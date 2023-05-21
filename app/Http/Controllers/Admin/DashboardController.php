<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // $this->authorize("view_dashboard");

        if(Gate::denies("view_dashboard")) {
            return redirect()->route("admin.courses.index");
        }

        $courses    = Course::count();
        $categories = Category::count();
        $students   = User::student()->count();
        return view('dashboard', compact("courses", "categories", "students"));
    }
}
