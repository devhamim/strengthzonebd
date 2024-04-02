<?php

namespace App\Http\Controllers;

use App\Models\pricing;
use Illuminate\Http\Request;
use Str;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = pricing::all();
        return view('backend.pricing.index', [
            'pricings'=>$pricings,
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
            'title'             =>'required',
            'icon'              =>'',
            'price'              =>'',
            'link'              =>'',
            'description'       =>'required',
        ];

        $validatesData = $request->validate($rules); 
        // icon
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/pricing'), $file_name);
            $validatesData['icon'] = $file_name;
        }

        pricing::create($validatesData);
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
        $pricings = pricing::find($id);
        return view('backend.pricing.edit', [
            'pricings'=>$pricings,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'             =>'required',
            'icon'              =>'',
            'price'             =>'',
            'link'              =>'',
            'description'       =>'required',
            'status'            =>'required',
        ];

        $validatesData = $request->validate($rules);

        // icon
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/pricing'), $file_name);
            $validatesData['icon'] = $file_name; 
        }
        
        pricing::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('pricing.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        pricing::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
