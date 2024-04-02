<?php

namespace App\Http\Controllers;

use App\Models\feature;
use App\Models\service;
use Illuminate\Http\Request;
use Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature_id = feature::where('status', 1)->get();
        $services = service::all();
        return view('backend.service.index', [
            'feature_id'=>$feature_id,
            'services'=>$services,
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
            'image'             =>'',
            'sort_desp'         =>'',
        ];

        $validatesData = $request->validate($rules); 
        // icon
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/service'), $file_name);
            $validatesData['icon'] = $file_name;
        }
        // image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/service'), $file_name);
            $validatesData['image'] = $file_name;
        }

        service::create($validatesData);
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
        $feature_id = feature::where('status', 1)->get();
        $services = service::find($id);
        return view('backend.service.edit', [
            'services'=>$services,
            'feature_id'=>$feature_id,
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
            'image'             =>'',
            'sort_desp'         =>'',
            'status'            =>'required',
        ];

        $validatesData = $request->validate($rules);

        // icon
        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/service'), $file_name);
            $validatesData['icon'] = $file_name; 
        }
        
        // image
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/service'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        
        service::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        service::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
