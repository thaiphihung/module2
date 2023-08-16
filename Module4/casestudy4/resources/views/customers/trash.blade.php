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
                    <th class="column-title">Image</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Phone</th>
                    <th class="column-title">Address</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Password</th>
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
                    <td class=" ">{{$customer->image}}</td>
                    <td class=" ">{{$customer->name}}</td>
                    <td class=" ">{{$customer->phone}} </td>
                    <td class=" ">{{$customer->address}} </td>
                    <td class=" ">{{$customer->email }} </td>
                    <td class=" ">{{$customer->password}} </td>
                    <td>
                    <a href="{{ route('customers.restore', $customer->id) }}" onclick="return confirm('Do u want to restore record?');" class="btn btn-primary">Restore
                    </a>
                    <a href="{{ route('customers.delete_forever', $customer->id) }}" onclick="return confirm('Do u want to delete forever record?');" class="btn btn-danger">
                    Destroy</a>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection