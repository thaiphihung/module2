<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::with('order')->get();
        return view('customers.index',compact('customers'));
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
        return view('customers.create',$param);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->phone = $request -> phone;
        $customer->address = $request -> address;
        $customer->email = $request -> email;
        $customer->password = $request -> password;
        $customer->image = $request -> image;
        
        $customer -> save();
        alert()->success('Created success');
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $customers = Customer::find($id);
        return view('customers.edit',compact(['customers']),$param);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customers = Customer::find($id);
        $customers->name=$request->name;
        $customers->phone=$request->phone;
        $customers->address=$request->address;
        $customers->email=$request->email;
        $customers->password=$request->password;
        $customers->image=$request->image;
        $customers->save();
        alert()->success('Edited success');
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    function trash(){
        // try {
            // $this->authorize('viewTrash',Product::class);
            $customers = Customer::onlyTrashed()->paginate(10);
            // dd($Customers);
            return view('customers.trash',compact('customers'));
        // } catch (\Exception $e) {
        //     alert()->warning('Have problem! Please try again late');
        //     return back();
        // }   
    }
    function destroy(String $id)
    {
        try {
            // $this->authorize('delete',Customer::class);
            $customers = Customer::find($id);
            $customers->delete();
            alert()->success('Success move to trash');
            return back();
        } catch (\Exception $e) {
            alert()->warning('Have problem! Please try again late');
            return back();
        } 
    }
    function restore(String $id){
        try {
            // $this->authorize('restore',Customer::class);
            $customers = Customer::withTrashed()->find($id);
            $customers->restore();
            alert()->success('Restore Customer success');
            return redirect()->route('customers.index');
        } catch (\Exception $e) {
            // Log::error($e->getMessage());
            alert()->warning('Have problem! Please try again late');
            return redirect()->route('Categories.index');
        }
    }
    function delete_forever(String $id){
        try {
            // $this->authorize('forceDelete',Customer::class);
            $customers = Customer::withTrashed()->find($id);
            $customers->forceDelete();
            alert()->success('Destroy Customer success');
            return redirect()->back();
        } catch (\Exception $e) {
            // Log::error($e->getMessage());
            alert()->warning('Have problem! Please try again late');
            return back();
        }
    }
}
