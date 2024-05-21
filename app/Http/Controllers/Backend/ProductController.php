<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('backend.product.index', compact('products'));
    }

    public function create()
    {
        return view('backend.product.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // Add more validation rules if needed
        ]);
    
        $productData = [
            'name' => $request->input('name'),
            'profession' => $request->input('profession'), 
            'description' => $request->input('desc'),
        ];
    
        // Handle image upload and save image data to the database
        // if ($request->hasFile('image')) {
        //     $uploadedImagePaths = [];
        //     foreach ($request->file('image') as $image) {
        //         // Get binary content of the image file
        //         $imageData = file_get_contents($image->getRealPath());
        //         // Convert binary content to base64 encoded string
        //         $base64Image = base64_encode($imageData);
        //         $uploadedImagePaths[] = $base64Image;
        //     }
        //     $productData['image'] = json_encode($uploadedImagePaths);
        // }
    
        // Create product with the provided data
        // Product::create($productData);

        $products = Product::create($productData);

        if ($request->hasFile('image')) {
            $uploadedImagePaths = [];
            foreach ($request->file('image') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
            $products->image = json_encode($uploadedImagePaths);
            $products->save();
        }

    
        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }
    
    
    
    public function edit($id)
    {
        $products = Product::find($id);
        if (!$products) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found.');
        }
        return view('backend.product.edit', compact('products'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $products = Product::find($id);
        if (!$products) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found.');
        }
    
        $products->name = $request->input('name');
        $products->profession = $request->input('profession'); // If profession exists
        $products->description = $request->input('description');
    
        if ($request->hasFile('image')) {
            $uploadedImagePaths = [];
            foreach ($request->file('image') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
            $products->image = json_encode($uploadedImagePaths);
        }
    
        $products->save();
    
        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}
