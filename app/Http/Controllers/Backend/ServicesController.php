<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Laracasts\Flash\Flash;
use App\Models\Services;
use App\Models\Mediaa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ServicesController extends Controller
{
   
public function index(Request $request)
     {
        $services = Services::orderBy('id','desc')->paginate(10);
         
         return view('backend.services.index', compact('services'));
     }
     
    /**
     * Show the form for creating a new resource.xxx`x
     */
    public function Form()
    {
        return view('backend.services.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif', 
        ]);
    
        $serviceData = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ];
    
        $serviceId = DB::table('services')->insertGetId($serviceData); 
        if ($request->hasFile('img')) {
            $uploadedImagePaths = [];
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename; 
            }
    
            DB::table('services')->where('id', $serviceId)->update(['img' => json_encode($uploadedImagePaths)]);
        }
    
        $services = Services::all();
        return view('backend.services.index', compact('services'));
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit($id)
    {
        $services = Services::find($id); 

        if (!$services) {
          
            return redirect()->back()->with('error', 'Service not found.');
        }

        return view('backend.services.edit', compact('services'));
    }


    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'img.*' => 'image|mimes:jpeg,png,jpg,gif',
        ]);
    
        $service = DB::table('services')->find($id);
        if (!$service) {
            return redirect()->back()->with('error', 'Service not found.');
        }
    
        $serviceData = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ];
    
        DB::table('services')->where('id', $id)->update($serviceData);
    
        if ($request->hasFile('img')) {
            $uploadedImagePaths = [];
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
    
            DB::table('services')->where('id', $id)->update(['img' => json_encode($uploadedImagePaths)]);
        }
    
        return redirect()->route('backend.services.index')->with('success', 'Service updated successfully.');
    }
    
    
    private function uploadImages($images)
    {
        $uploadedImageIds = [];
        foreach ($images as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);
    
            $serviceId = DB::table('services')->insertGetId([
                'img' => $filename
            ]);
    
            $uploadedImageIds[] = $serviceId;
        }
        return $uploadedImageIds;
    }
    

    public function destroy($id)
    {
        Services::whereId($id)->delete();
        $services = Services::all();
        return view('backend.services.index', compact('services'));

    }

}
