<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $users = User::with('groups')->paginate(4);
        return view('users.index',compact('users'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        
        $groups = Groups::get();
        $param = [
            'groups' => $groups
        ];
        $users = User::find($id);
        return view('users.edit',compact(['users']),$param);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->group_id=$request->group_id;

        $fieldName = 'image';
        if ($request->hasFile($fieldName))
          {
            $get_img = $request->file($fieldName);
            $path = 'storage/user/';
            $new_name_img = rand(1,100).$get_img->getClientOriginalName();
            $get_img->move($path,$new_name_img);
            $users->image = $path.$new_name_img;
        }
         $users->save();
         alert()->success('Edited success');
         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    function trash(){
            $users = User::onlyTrashed()->paginate(10);
            // dd($users);
            return view('users.trash',compact('users'));
        
    }
    function destroy(String $id)
    {
        try {
            // $this->authorize('delete',User::class);
            $user = User::find($id);
            $user->delete();
            alert()->success('Success move to trash');
            return back();
        } catch (\Exception $e) {
            alert()->warning('Have problem! Please try again late');
            return back();
        } 
    }
    function restore(String $id){
        try {
            // $this->authorize('restore',User::class);
            $softs = User::withTrashed()->find($id);
            $softs->restore();
            alert()->success('Restore user success');
            return redirect()->route('users.index');
        } catch (\Exception $e) {
            // Log::error($e->getMessage());
            alert()->warning('Have problem! Please try again late');
            return redirect()->route('users.index');
        }
    }
    function delete_forever(String $id){
            $softs = User::withTrashed()->find($id);
            $softs->forceDelete();
            alert()->success('Destroy user success');
            return redirect()->back();
    }

    
}
