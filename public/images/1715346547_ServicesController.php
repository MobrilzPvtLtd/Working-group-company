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
    /**
     * Display a listing of the resource.
     */

        public function index(Request $request){
            $services = Services::all();
            return  view('backend.services.index',compact('services'));
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
        $serviceData = [
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
        ];
        $serviceId = DB::table('services')->insertGetId($serviceData); // Insert service and get its ID

        if ($request->hasFile('img')) {
            $uploadedImageIds = [];
            foreach ($request->file('img') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);

                // Insert image into 'mediaa' table and get its ID
                $mediaaId = DB::table('mediaa')->insertGetId([
                    'name' => $filename
                ]);

                $uploadedImageIds[] = $mediaaId; // Store the ID of the inserted image
            }

            // Store the IDs of uploaded images in the 'services' table as a comma-separated string
            $imgIdsString = implode(',', $uploadedImageIds);
            DB::table('services')->where('id', $serviceId)->update(['img' => $imgIdsString]);
        }

        // Redirect back or return a view with the updated data
        $services = Services::all();
        return view('backend.services.index', compact('services'));
    }


    /**
     * Store a newly created resource in storage.
     */


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
    public function edit($id)
    {
        $services = Services::find($id); // Assuming 'Service' is your model name

        if (!$services) {
            // Handle the case when service data is not found
            return redirect()->back()->with('error', 'Service not found.');
        }

        return view('backend.services.edit', compact('services'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required',
        'img' => 'required',
        'desc' => 'required',
    ]);

    // Find the service by its ID
    $service = Services::findOrFail($id);

    // Handle image upload
    $uploadedImageIds = [];
    if ($request->hasFile('img')) {
        foreach ($request->file('img') as $image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $filename);

            // Insert image into 'mediaa' table and get its ID
            $mediaaId = DB::table('mediaa')->insertGetId([
                'name' => $filename
            ]);

            $uploadedImageIds[] = $mediaaId; // Store the ID of the inserted image
        }
    }

    // Update service data
    $service->update([
        'name' => $request->input('name'),
        'img' => implode(',', $uploadedImageIds), // Store image IDs as comma-separated string
        'desc' => $request->input('desc'),
    ]);

    // Redirect back with a success message
    return redirect()->route('backend.services.index')->with('success', 'Service updated successfully.');
}


    public function destroy($id)
    {
         Services::whereId($id)->delete();
        //   return redirect()->route('backend.services.index')->with('success','Services been deleted successfully');
        $services = Services::all();
        return view('backend.services.index', compact('services'));

    }

}
