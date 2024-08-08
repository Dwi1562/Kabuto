<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);


        return redirect('/users')->with('success', 'User has been added');
    }

    public function show($id)
    {
        return view('admin.user.show');
    }

    public function edit($id)
    {
        
        return view('admin.user.edit');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6'
        ]);

        return redirect('/users')->with('success', 'User has been updated');
    }

    public function destroy($id)
    {
        return redirect('/users')->with('success', 'User has been deleted');
    }
}
