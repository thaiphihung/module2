@extends('layouts.master')
@section('content')
@include('sweetalert::alert')


<style>
    .image-container {
        max-width: 80px;
        max-height: 80px;
        overflow: hidden;
    }

    .image-container img {
        width: auto;
        height: auto;
    }
</style>
<div class="x_content">
    <div class="table-responsive">
        @if (Auth::user()->hasPermission('products_viewAny'))
        <a class="btn btn-primary" href="{{ route('products.create') }}"><i class="bi bi-card-list"></i>Add</a>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Img</th>
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
                    <td>
                        <div class="image-container">
                            <img src="{{ asset($product->image) }}" class="rounded-bottom-1" alt="">
                        </div>
                    </td>
                    <td class=" ">{{$product->name}}</td>
                    <td class=" ">{{$product->price}} </td>
                    <td class=" ">{{$product->category->name}}</td>
                    <td>
                        <form action="{{ route('products.destroy', [$product->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            @if (Auth::user()->hasPermission('products_update'))
                            <a class="btn btn-primary" href="{{ route('products.edit', $product['id']) }}"><i class="bi bi-pencil-square"></i>Edit</a>
                            @endif
                            @if (Auth::user()->hasPermission('products_view'))
                            <a class="btn btn-warning" href="{{ route('products.show', $product['id']) }}"><i class="bi bi-pencil-square"></i>See</a>
                            @endif
                            @if (Auth::user()->hasPermission('products_delete'))
                            <button onclick="return confirm('Are you sure?');" class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>

</div>
@endsection