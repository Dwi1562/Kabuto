<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
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

        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password'))
        ]);

        $user->save();

        return redirect('/users')->with('success', 'User has been added');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');

        if ($request->filled('password')) {
            $user->password = bcrypt($request->get('password'));
        }

        $user->save();

        return redirect('/users')->with('success', 'User has been updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users')->with('success', 'User has been deleted');
    }
}
