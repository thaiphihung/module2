<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
            $orders = Order::with('customer')->get();
            return view('orders.index', compact('orders'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $customers = Customer::get();
        $param = [
            'customers' => $customers
        ];
        return view('orders.create', $param);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $order = Order::with('product')->findOrFail($id);
        // $param = [
        //     'order' => $order,
        // ];
        
        $items = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('orderdetail', 'orders.id', '=', 'orderdetail.order_id')
            ->join('products', 'orderdetail.product_id', '=', 'products.id')
            ->select('orders.*', 'customers.name as customer_name', 'products.name as product_name', 'products.price as product_price', 'orderdetail.*')
            ->where('orders.customer_id', '=', $id)
            ->orderBy('orders.order_date', 'DESC')
            ->get();
        return view('orders.show', compact('items'));
        // return view('orders.show',$param);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::get();
        $param = [
            'customers' => $customers
        ];
        $order = Order::find($id);
        return view('orders.edit', compact(['order']), $param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProductRequest $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
