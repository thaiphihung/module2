<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff = Staff::all();
        return view('staffs.index',compact(['staff']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staffs/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $staff = new Staff();
        $staff->name = $request->name;
        $staff->age = $request -> age;
        $staff->email = $request -> email;
        $staff -> save();
        return redirect()->route('staff.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $staff = Staff::find($id);
        return view('staffs/show',compact(['staff']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $staff = Staff::find($id);
        return view('staffs/edit',compact(['staff']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $validated = $request->validate(
            [
                'name' => 'required|string|min:6|max:12',
                'email'=>'required|email:staff_list'
            ],
            [
                'name.required' => 'Không được để trống name',
                'name.string' => 'Name phải là kiểu chữ',
                'name.min' => 'Name không được dưới 6 ký tự',
                'name.max' => 'Name không được trên 12 ký tự',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Nhập đúng định dạng email',
        
            ]
        );
        $staff = Staff::find($id);
        $staff->name=$request->name;
        $staff->age=$request->age;
        $staff->email=$request->email;
        $staff->save();
        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $id)
    {
        // $staff = Staff::find($id);
        // dd($id);
        Staff::destroy($id->id);
        return redirect()->route('staff.index');
    }
}
