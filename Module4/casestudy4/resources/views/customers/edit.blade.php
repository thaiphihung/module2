@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Create</h1>
    <form class='ml-5' action="{{route('customers.update',[$customers->id])}}" method="POST" enctype="multipart/form-data">  
    @csrf
    @method('PUT')  
        <div class="mb-3">
            <label class="form-label"> Name :</label>
            <input type="text" id="fname" name="name" value="{{$customers->name}}" class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Phone :</label>
            <input type="text" id="fname" name="phone" value="{{$customers->phone}}" class="form-control">
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" id="fname" name="address" value="{{$customers->address}}" class="form-control">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" name="email" value="{{$customers->email}}" type="text">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input class="form-control" name="password" value="{{$customers->password}}" type="text">
            @error('email')
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
        <input type="submit" value="Add" class="btn btn-success">
        <a href="{{route('customers.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection