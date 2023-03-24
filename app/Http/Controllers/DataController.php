<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;



class DataController extends Controller
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
        return view("biodata");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required|min:3|regex:/^[a-zA-Z]+$/u|max:25',
            'age' => 'required|max:2',
           'address' => 'required|max:8',
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
               ]);
                $input = $request->all();

                if ($image = $request->file('image')) 
                {
                    $destinationPath = 'image1/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $input['image'] = "$profileImage";
                
                
                }
                $form =new form();
   
                $form->name = $request->name;
                $form->age= $request->age;
                // $user->password = Hash::make($request->password);
                $form->address = $request->address;
                $form->image = $request->image;
                
                $res =$form->save();
                if($res){
                    return back()->with('success','You have registered successfully')
                    ->with('image',$profileImage);
                }
                else{
                    return back()->with('fail','something to wrong');
                }
            }
    






                
   
    

   
    public function show(form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(form $form)
    {
        //
    }
}
