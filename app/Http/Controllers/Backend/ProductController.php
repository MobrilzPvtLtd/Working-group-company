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
           
           
        ]);

        $productData = [
            'name' => $request->input('name'),
            'profession' => $request->input('profession'), // If profession exists
            'description' => $request->input('desc'),
        ];

        $products = Product::create($productData);

        if ($request->hasFile('img')) {
            $uploadedImagePaths = [];
            foreach ($request->file('img') as $image) {
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
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found.');
        }
        return view('backend.product.edit', compact('product'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
    
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.product.index')->with('error', 'Product not found.');
        }
    
        $product->name = $request->input('name');
        $product->profession = $request->input('profession'); // If profession exists
        $product->description = $request->input('desc');
    
        if ($request->hasFile('image')) {
            $uploadedImagePaths = [];
            foreach ($request->file('image') as $image) {
                $filename = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);
                $uploadedImagePaths[] = $filename;
            }
            $product->image = json_encode($uploadedImagePaths);
        }
    
        $product->save();
    
        return redirect()->route('admin.product.index')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Product deleted successfully.');
    }
}
