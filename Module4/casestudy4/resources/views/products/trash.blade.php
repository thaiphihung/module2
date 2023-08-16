@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="x_content">
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Price</th>
                    <th class="column-title">Category</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$product->id}}</td>
                    <td class=" ">{{$product->name}}</td>
                    <td class=" ">{{$product->price}} </td>
                    <td class=" ">{{$product->category->name}}</td>
                    <td>
                    <a href="{{ route('products.restore', $product->id) }}" onclick="return confirm('Do u want to restore record?');" class="btn btn-primary">Restore
                    </a>
                    <a href="{{ route('products.delete_forever', $product->id) }}" onclick="return confirm('Do u want to delete forever record?');" class="btn btn-danger">
                    Destroy</a>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection