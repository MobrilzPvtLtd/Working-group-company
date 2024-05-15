<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services; 
use Illuminate\Http\Request;

class ServicesprovidersController extends Controller
{
    public function index(Request $request)
    {
        $services = Services::all();
        return view('backend.providers.index', compact('services'));
    }

    public function create()
    {
        return view('backend.providers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        // Assuming you have a User model, create the user here
        // User::create($request->all());

        return redirect()->route('backend.providers.index')->with('success', 'Provider created successfully.');
    }

    public function show(string $id)
    {
        $service = Services::findOrFail($id);
        return view('backend.providers.show', compact('service'));
    }

    public function edit(string $id)
    {
        $service = Services::findOrFail($id);
        return view('backend.providers.edit', compact('service'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $service = Services::findOrFail($id);
        // Update service provider details here
        // $service->update($request->all());

        return redirect()->route('backend.providers.index')->with('success', 'Provider updated successfully.');
    }

    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);
        // Delete service provider here
        // $service->delete();

        return redirect()->route('backend.providers.index')->with('success', 'Provider deleted successfully.');
    }
}
