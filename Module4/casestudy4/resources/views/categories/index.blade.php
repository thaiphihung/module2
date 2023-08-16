@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="x_content">
    @if (Auth::user()->hasPermission('categories_viewAny'))
    <div class="table-responsive">
    <a class="btn btn-primary" href="{{ route('categories.create') }}"><i class="bi bi-card-list"></i>Add</a>
        
    <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Name</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($category as $key => $category)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$category->id}}</td>
                    <td class=" ">{{$category->name}}</td>
                    <td>
                        <form action="{{ route('categories.destroy', [$category->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            @if (Auth::user()->hasPermission('categories_update'))
                           
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category['id']) }}"><i class="bi bi-pencil-square"></i>Edit</a>
                            @endif
                            
                            @if (Auth::user()->hasPermission('categories_delete'))
                            <button onclick="return confirm('Are you sure?');" class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

</div>
@endsection