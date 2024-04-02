<?php

namespace App\Http\Controllers;

use App\Models\customerSay;
use Illuminate\Http\Request;
use Str;

class CustomerSayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customerSays = customerSay::all();
        return view('backend.customerSay.index', [
            'customerSays'=>$customerSays,
        ]);
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
        $rules = [
            'name'=>'required',
            'post'=>'required',
            'image'=>'',
            'description'=>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/customersay'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        customerSay::create($validatesData);
        toast('Add Success','success');   
        return back();
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
        $customerSays = customerSay::find($id);
        return view('backend.customerSay.edit', [
            'customerSays'=>$customerSays,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name'=>'required',
            'post'=>'required',
            'image'=>'',
            'description'=>'required',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/customersay'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        customerSay::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('customerSay.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        customerSay::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
