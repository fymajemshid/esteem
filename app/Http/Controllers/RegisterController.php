<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("register");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('register')->insert([
            
            'name' => $request->name,
            'qualification' => $request->qualification,
            'password' => $request->password,
            'semester' => $request->semester,
            
                ]);
                return redirect()->route('home')->with('register', 'register Successfully');
                // return back()->with('register','registered Successfully');
    }

   
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
