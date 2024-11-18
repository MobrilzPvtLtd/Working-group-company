<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ServicesprovidersController extends Controller
{

    public function index(Request $request)
    {
        $users = User::where('name', 'service provider')->get();
        // $users = User::all();

        return view('backend.providers.index', compact('users'));
    }


    public function create()
    {
        return view('backend.providers.create');
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);

        $userData = [
            'name' => $request->input('name'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ];
        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Redirect back with an error if email is already in use
            return redirect()->back()->withErrors(['email' => 'This email is already in use.'])->withInput();
        }
        User::create($userData);

        return redirect()->route('admin.providers.index')->with('success', 'User created successfully.');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('backend.providers.show', compact('user'));
    }

    public function edit(string $id)
    {
        $service = User::findOrFail($id);
        return view('backend.providers.edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->route('admin.providers.index')->with('success', 'User updated successfully.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.providers.index')->with('success', 'User deleted successfully.');
    }
}
