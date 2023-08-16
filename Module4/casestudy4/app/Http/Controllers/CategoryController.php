<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::with('product')->get();
        return view('categories/index',compact('category'));
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
        return view('categories.create',$param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->name;
        $categories -> save();
        alert()->success('Created success');
        return redirect()->route('categories.index');
    }

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
    public function edit(string $id)
    {
        $categories = Category::get();
        $this->authorize('update',$categories);
        $param = [
            'categories' => $categories
        ];
        $categories = Category::find($id);
        return view('categories.edit',compact(['categories']),$param);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categories = Category::find($id);
        $categories->name=$request->name;
        $categories->save();
        alert()->success('Edited success');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    function trash(){
        // try {
            // $this->authorize('viewTrash',Product::class);
            $categories = Category::onlyTrashed()->paginate(10);
            // dd($Categorys);
            return view('categories.trash',compact('categories'));
        // } catch (\Exception $e) {
        //     alert()->warning('Have problem! Please try again late');
        //     return back();
        // }   
    }
    function destroy(String $id)
    {

        // try {
            $category = Category::findOrFail($id);
            $this->authorize('delete',$category);
            $category->delete();
            alert()->success('Success move to trash');
            return back();
        // } catch (\Exception $e) {
        //     alert()->warning('Have problem! Please try again late');
        //     return back();
        // } 
    }
    function restore(String $id){
        try {
            // $this->authorize('restore',Category::class);
            $categories = Category::withTrashed()->find($id);
            $categories->restore();
            alert()->success('Restore Category success');
            return redirect()->route('categories.index');
        } catch (\Exception $e) {
            // Log::error($e->getMessage());
            alert()->warning('Have problem! Please try again late');
            return redirect()->route('Categories.index');
        }
    }
    function delete_forever(String $id){
        try {
            // $this->authorize('forceDelete',Category::class);
            $categories = Category::withTrashed()->find($id);
            $categories->forceDelete();
            alert()->success('Destroy Category success');
            return redirect()->back();
        } catch (\Exception $e) {
            // Log::error($e->getMessage());
            alert()->warning('Have problem! Please try again late');
            return back();
        }
    }
}
