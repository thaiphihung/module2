@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Edit</h1>
    <form class='ml-5' action="{{route('products.update',[$product->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')    
        <div class="mb-3">
            <label class="form-label"> Name :</label>
            <input type="text" id="fname" name="name" value='{{$product->name}}' class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Slug :</label>
            <input type="text" id="fname" name="slug" value='{{$product->slug}}' class="form-control">
            @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Price:</label>
            <input type="text" id="fname" name="price" value='{{$product->price}}' class="form-control">
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Thể loại</label>
            <select name="category_id" id="" value='{{$product->category_id}}' class="form-control">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description:</label>
            <textarea class="form-control" type="text" id="editor"  name="description">{{$product->description}}</textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input class="form-control" name="quantity" value='{{$product->quantity}}' type="number">
            @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input class="form-control" name="image" type="file">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
        <label class="form-label">Status</label>
                                    <select name="status" class="form-select" id="inputGroupSelect02">
                                        @if ($product->status == 0)
                                            <option selected value="0">Active<table></table>
                                            </option>
                                            <option value="1">NonActive</option>
                                        @else ($product->status == 1)
                                            <option value="0">Active<table></table>
                                            </option>
                                            <option selected value="1">NonActive</option>
                                        @endif
                                    </select>
            @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Add" class="btn btn-success">
        <a href="{{route('products.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection