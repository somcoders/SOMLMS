<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins         = User::admin()->count();
        $instructors    = User::instructor()->count();
        $students       = User::student()->count();

        $users  = User::paginate(5);
        return view("admin.users.index", compact("users", "admins", "instructors", "students"));
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
        $roles = ["admin","instructor","student"];

        $user = User::findOrFail($id);
        return view("admin.users.change_role", compact("user", "roles"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "role" => "required|in:admin,instructor,student"
        ]);

        $user = User::findOrFail($id);
        $user->role = $request->role;
        $user->update();

        return redirect()->back()->with("success", "User Role Updaated Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
