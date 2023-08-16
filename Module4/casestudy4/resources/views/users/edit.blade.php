@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Edit</h1>
    <form class='ml-5' action="{{route('users.update',[$users->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')    
        <div class="mb-3">
            <label class="form-label"> Name :</label>
            <input type="text" id="fname" name="name" value='{{$users->name}}' class="form-control">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email :</label>
            <input type="text" id="fname" name="email" value='{{$users->email}}' class="form-control">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Position</label>
            <select name="group_id" id="" value='{{$users->group_id}}' class="form-control">
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
            @error('group_id')
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
        <a href="{{route('users.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection