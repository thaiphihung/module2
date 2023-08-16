<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CreateBookRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(5);
        return view('store.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Book::get();
        $param = [
            'books' => $books
        ];
        return view('store.create', $param);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(CreateBookRequest  $request)
    {
        $books = new Book();
        $books->name = $request->name;
        $books->ISBN = $request->ISBN;
        $books->author = $request->author;
        $books->category = $request->category;
        $books->number_of_pages = $request->number_of_pages;
        $books->publishing_year = $request->publishing_year;
        $books->save();
    
        Alert::success('Success', 'Thêm sách thành công!');
    
        return redirect()->route('books.index');
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
        $books = Book::find($id);
        $param = [
            'books' => $books
        ];
        return view('store.edit', $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateBookRequest  $request, string $id)
    {
        $books = Book::findOrFail($id);
        $books->name = $request->name;
        $books->ISBN = $request->ISBN;
        $books->author = $request->author;
        $books->category = $request->category;
        $books->number_of_pages = $request->number_of_pages;
        $books->publishing_year = $request->publishing_year;
        alert()->success('Cập nhật thành công!');
        $books->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Book::find($id);
        $books->delete();
        // alert('Xóa loại sản phẩm thành công');
        return redirect()->route('books.index');
    }
}
