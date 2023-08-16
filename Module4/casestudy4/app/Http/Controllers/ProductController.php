<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
            $products = Product::with('category')->paginate(4);
            return view('products.index', compact('products'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
            $categories = Category::get();
            $param = [
                'categories' => $categories
            ];
            return view('products.create', $param);
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->category_id  = $request->category_id;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $get_img = $request->file($fieldName);
            $path = 'storage/product/';
            $new_name_img = rand(1, 100) . $get_img->getClientOriginalName();
            $get_img->move($path, $new_name_img);
            $product->image = $path . $new_name_img;
        }

        $product->save();
        alert()->success('Created success');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productshow = Product::findOrFail($id);
        $param = [
            'productshow' => $productshow,
        ];
        // $product = Product::find($id);
        return view('products/show', $param);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
            $categories = Category::get();
            $param = [
                'categories' => $categories
            ];
            $product = Product::find($id);
            return view('products.edit', compact(['product']), $param);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, String $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->status = $request->status;
        $product->category_id = $request->category_id;
        $fieldName = 'image';
        if ($request->hasFile($fieldName)) {
            $get_img = $request->file($fieldName);
            $path = 'storage/product/';
            $new_name_img = rand(1, 100) . $get_img->getClientOriginalName();
            $get_img->move($path, $new_name_img);
            $product->image = $path . $new_name_img;
        }
        $product->save();
        alert()->success('Edited success');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    function trash()
    {
       
            $products = Product::onlyTrashed()->paginate(10);
            // dd($products);
            return view('products.trash', compact('products'));
       
    }
    function destroy(String $id)
    {
            $product = Product::find($id);
            $product->delete();
            alert()->success('Success move to trash');
            return back();
        
    }
    function restore(String $id)
    {
       
            $softs = Product::withTrashed()->find($id);
            $softs->restore();
            alert()->success('Restore product success');
            return redirect()->route('products.index');
       
    }
    function delete_forever(String $id)
    {
      
            $softs = Product::withTrashed()->find($id);
            $softs->forceDelete();
            alert()->success('Destroy product success');
            return redirect()->back();
        
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
       
        if (!$search) {
            return redirect()->route('product.index');
        }
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->paginate(2);
        return view('products.index', compact('products'));
    }
}
