<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\User; 
use Illuminate\Http\Request;

class ServicesprovidersController extends Controller
{
    public function index(Request $request)
    {
        $Users = User::all();
        return view('backend.providers.index', compact('Users'));
    }

    public function create()
    {
        return view('backend.providers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email', 
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        
        

        return redirect()->route('backend.providers.index')->with('success', 'Provider created successfully.');
    }

    public function show(string $id)
    {
        $User = User::findOrFail($id);
        return view('backend.providers.show', compact('User'));
    }

    public function edit(string $id)
    {
        $User = User::findOrFail($id);
        return view('backend.providers.edit', compact('User'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $User = User::findOrFail($id);
        // Update service provider details here
        // $service->update($request->all());

        return redirect()->route('backend.providers.index')->with('success', 'Provider updated successfully.');
    }

    public function destroy(string $id)
    {
        $User = User::findOrFail($id);
        // Delete service provider here
        // $service->delete();s

        return redirect()->route('backend.providers.index')->with('success', 'Provider deleted successfully.');
    }
}
