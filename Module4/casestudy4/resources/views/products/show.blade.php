@extends('layouts.master')
@section('content')
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
                    <th class="column-title">Slug</th>
                    <th class="column-title">Price</th>
                    <th class="column-title">Description</th>
                    <th class="column-title">Quantity</th>
                    <th class="column-title">Status</th>
                    <th class="column-title">Category</th>
                    </th>
                </tr>
            </thead>

            <tbody>
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$productshow->id}}</td>
                    <td class=" ">{{$productshow->name}}</td>
                    <td class=" ">{{$productshow->slug}}</td>
                    <td class=" ">{{$productshow->price}} </td>
                    <td class=" ">{{$productshow->description}} </td>
                    <td class=" ">{{$productshow->quantity}} </td>
                    <td class=" ">
                        @if($productshow->status == 0)
                        <?php echo 'Active'; ?>
                        @else
                        <?php echo 'NonActive'; ?>
                        @endif
                    </td>
                    <td class=" ">{{$productshow->category->name}}</td>

                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection