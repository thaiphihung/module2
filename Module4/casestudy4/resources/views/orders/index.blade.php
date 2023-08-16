@extends('layouts.master')
@section('content')
@include('sweetalert::alert')
<div class="x_content">
    <div class="table-responsive">
        @if (Auth::user()->hasPermission('orders_viewAny'))
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr class="headings">
                    <th>
                        <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">ID</th>
                    <th class="column-title">Order_Date</th>
                    <th class="column-title">Delivery_Date</th>
                    <th class="column-title">Total_Amount</th>
                    <th class="column-title">Notes</th>
                    <th class="column-title">Customer</th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach($orders as $key => $order)
                <tr class="even pointer">
                    <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$order->id}}</td>
                    <td class=" ">{{$order->order_date}}</td>
                    <td class=" ">{{$order->delivery_date}} </td>
                    <td class=" ">{{$order->total_amount}}</td>
                    <td class=" ">{{$order->notes}}</td>
                    <td class=" ">{{isset($order->customer) ? $order->customer->name : ''}}</td>
                    <td>
                        @if (Auth::user()->hasPermission('orders_view'))
                        <a class="btn btn-warning" href="{{ route('orders.show', $order['id']) }}"><i class="bi bi-pencil-square"></i>See</a>
                        @endif

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</div>
@endsection