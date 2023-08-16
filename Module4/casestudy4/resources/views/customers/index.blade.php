@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="x_content">
    <div class="table-responsive">
    @if (Auth::user()->hasPermission('customers_update'))

    <a class="btn btn-primary" href="{{ route('customers.create') }}"><i class="bi bi-card-list"></i>Add</a>
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Image</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Phone</th>
                    <th class="column-title">Address</th>
                    <th class="column-title">Email</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($customers as $key => $customer)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$customer->id}}</td>
                    <td class=" ">{{$customer->image}} </td>
                    <td class=" ">{{$customer->name}}</td>
                    <td class=" ">{{$customer->phone}} </td>
                    <td class=" ">{{$customer->address}} </td>
                    <td class=" ">{{$customer->email}} </td>
                    <td>
                        <form action="{{ route('customers.destroy', [$customer->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            @if (Auth::user()->hasPermission('customers_update'))
                            <a class="btn btn-primary" href="{{ route('customers.edit', $customer['id']) }}"><i class="bi bi-pencil-square"></i>Edit</a>
                            @endif

                            @if (Auth::user()->hasPermission('customers_view'))
                            <a class="btn btn-warning" href="{{ route('customers.show', $customer['id']) }}"><i class="bi bi-pencil-square"></i>See</a>
                            @endif
                            
                            @if (Auth::user()->hasPermission('customers_delete'))
                            <button onclick="return confirm('Are you sure?');" class="btn btn-danger"><i class="bi bi-trash3"></i>Delete</button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</div>
@endsection