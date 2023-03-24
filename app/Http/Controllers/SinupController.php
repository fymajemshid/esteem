<?php

namespace App\Http\Controllers;

use App\Models\User;
use Session;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
// use DB;

class SinupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('sinin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sinup');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|string|min:5',
            // username’ => ‘required|string|max:255’,
           
            // 'email' =>'required|email|unique:sinup',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:5|max:12',
            'cpassword'=>'required|same:password'
        // ],
        // [
        //     'username.required' => 'Name is must.',
        //     'username.min' => 'Name must have 5 char.',
            
            
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

    /**
     * Display the specified resource.
     */
   
public function sinin(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
    ]);
    // $user =new User();
    $user =User::where('email','=',$request->email)->first();

    if($user)
    {
       if($request->password==$user->password)
       {
           $request->session()->put('loginId',$user->id);
           return redirect('home');
          return view('home');
       }
       else{
           return back()->with('fail','the password not matches.');
       }

          
    }
    else{
        return back()->with('fail','This email is not registered');

    }
}
    public function edit(sinup $sinup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sinup $sinup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sinup $sinup)
    {
        //
    }
    public function forgotPassword()
{
    return view('forgotPassword');
}
public function ChangePassword(Request $request)
{
    {
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
            // 'conpassword'=>'required|min:5|max:12'
        ]);
        if($request->password == $request->confirmpassword)
        {
        $user =User::where('email','=',$request->email)->update([
               'password'=> $request->password
        ]);
        return back()->with('success','password changed');
        }
        else{
            return back()->with('fail','password does not matches');
        }
    
    }
    
}
}

