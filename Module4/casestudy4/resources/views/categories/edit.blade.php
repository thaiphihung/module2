@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Edit</h1>
    <form class='ml-5' action="{{route('categories.update',[$categories->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')    
        <div class="mb-3">
            <label class="form-label"> Name :</label>
            <input type="text" id="fname" name="name" value='{{$categories->name}}' class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Add" class="btn btn-success">
        <a href="{{route('categories.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection