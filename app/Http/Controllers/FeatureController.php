<?php

namespace App\Http\Controllers;

use App\Models\feature;
use Illuminate\Http\Request;
use Str;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = feature::all();
        return view('backend.feature.index', [
            'features'=>$features,
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
    public function store(Request $request, feature $feature)
    {
        $rules = [
            'name'=>'required',
            'icon'=>'',
            'image'=>'',
            'description'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/feature'), $file_name);
            $validatesData['icon'] = $file_name;
        }
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/feature'), $file_name);
            $validatesData['image'] = $file_name;
        }

        feature::create($validatesData);
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
        $features = feature::find($id);
        return view('backend.feature.edit', [
            'features'=>$features,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name'=>'required',
            'icon'=>'',
            'image'=>'',
            'description'=>'',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999) .'.'.$extension;
            $image->move(public_path('uploads/feature'), $file_name);
            $validatesData['icon'] = $file_name;
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/feature'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        feature::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('feature.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        feature::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
