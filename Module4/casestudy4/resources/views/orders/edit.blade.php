@extends('layouts.master')
@section('content')
<main id="main">
    <h1>Edit</h1>
    <form class='ml-5' action="{{route('orders.update',[$order->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') 
        <div class="mb-3">
            <label class="form-label"> Order_Date :</label>
            <input type="date" id="fname" name="order_date" value='{{$order->order_date}}' class="form-control">
            @error('order_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Delivery_Date :</label>
            <input type="date" id="fname" name="delivery_date" value="{{$order->delivery_date}}" class="form-control">
            @error('delivery_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Total_Amount:</label>
            <input type="text" id="fname" name="total_amount" value="{{$order->total_amount}}" class="form-control">
            @error('total_amount')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Customer</label>
            <select name="customer_id" id="" value='{{$order->category_id}}'  class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
            @error('customer_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Notes:</label>
            <textarea class="form-control" type="text" id="editor"  name="notes">{{$order->notes}}</textarea>
            @error('notes')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Add" class="btn btn-success">
        <a href="{{route('orders.index')}}" class="btn btn-danger">Huỷ</a>
    </form>
</main>
@endsection