<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $services = Services::orderBy('id', 'desc')->paginate(10);
        return view('backend.services.index', compact('services'));
    }
    public function form(Request $request)
    {
        return view('backend.services.create');
    }
    

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'img.*' => 'image|mimes:jpeg,png,jpg,gif',
            // 'desc' => 'required'
        ]);

        $serviceData = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ];

        $service = Services::create($serviceData);

        if ($request->hasFile('img')) {
            $uploadedImagePaths = [];
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
            $service->img = json_encode($uploadedImagePaths);
            $service->save();
        }

        return redirect()->route('services')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Services::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }
        return view('backend.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif',
            'desc' => 'required'
        ]);

        $service = Services::find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }

        $service->name = $request->input('name');
        $service->desc = $request->input('desc');
        $service->save();

        if ($request->hasFile('img')) {
            $uploadedImagePaths = [];
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
            $service->img = json_encode($uploadedImagePaths);
            $service->save();
        }

        return redirect()->route('services')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        Services::findOrFail($id)->delete();
        return redirect()->route('services')->with('success', 'Service deleted successfully.');
    }
}
