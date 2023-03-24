<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registration()
    {
      return  view('admin/admin-registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registerUser(Request $request)
    
    {
        {
            $request->validate([
                'username'=>'required|string|min:5',
                'email' =>'required|email|unique:users',
                'password' =>'required|min:5|max:12',
                'cpassword'=>'required|same:password'              
                
            ]);
    
            $user =new User();
            $user->name = $request->username;
            $user->email = $request->email;
            // $user->password = Hash::make($request->password);
            $user->password = $request->password;
            $res =$user->save();
            if($res){
                return back()->with('success','You have registered successfully');
            }
            else{
                return back()->with('fail','something to wrong');
            }
        }
    }
    public function show(auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auth $auth)
    {
        //
    }
}
