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
                    <th class="column-title">Order_Id</th>
                    <th class="column-title">Product</th>
                    <th class="column-title">Quantity</th>
                    <th class="column-title">Total</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>

            <tbody>
            @foreach($items as $key => $item)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$item->id}}</td>
                    <td class=" ">{{$item->order_id}}</td>
                    <td class=" ">{{$item->product_name}}</td>
                    <td class=" ">{{$item->quantity}}</td>
                    <td class=" ">{{$item->total}}</td>
                    <td>
                            <a class="btn btn-primary" href="{{ route('orders.show', $item['id']) }}"><i class="bi bi-pencil-square"></i>See</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection