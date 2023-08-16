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
        @if (Auth::user()->hasPermission('users_viewAny'))

        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Img</th>
                    <th class="column-title">Name</th>
                    <th class="column-title">Email</th>
                    <th class="column-title">Position</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $key => $user)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$user->id}}</td>
                    <td>
                        <div class="image-container">
                            <img src="{{ asset($user->image) }}" class="rounded-bottom-1" alt="">
                        </div>
                    </td>
                    <td class=" ">{{$user->name}}</td>
                    <td class=" ">{{$user->email}} </td>
                    <td class=" ">{{ $user->groups ? $user->groups->name : '' }}</td>
                    <td>
                        <form action="{{ route('users.destroy', [$user->id]) }}" method="post">
                            @method('DELETE')
                            @csrf
                            @if (Auth::user()->hasPermission('users_update'))
                            <a class="btn btn-primary" href="{{ route('users.edit', $user['id']) }}"><i class="bi bi-pencil-square"></i>Edit</a>
                            @endif
                            @if (Auth::user()->hasPermission('products_view'))
                            <a class="btn btn-warning" href="{{ route('users.show', $user['id']) }}"><i class="bi bi-pencil-square"></i>See</a>
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
            {{ $users->appends(request()->query())->links('pagination::bootstrap-4') }}
        </div>
        @endif
    </div>

</div>
@endsection