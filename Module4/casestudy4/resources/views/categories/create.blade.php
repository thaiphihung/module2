@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Create</h1>
    <form class='ml-5' action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label"> Name :</label>
            <input type="text" id="fname" name="name" class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Add" class="btn btn-success">
        <a href="{{route('categories.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection