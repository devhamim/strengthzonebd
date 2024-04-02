<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;
use Str;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = about::all();
        return view('backend.about.index', [
            'abouts'=>$abouts,
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
            'subtitle'      =>'required',
            'title'         =>'required',
            'image'         =>'required',
            'description'   =>'required',
            'define'       =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/about'), $file_name);
            $validatesData['image'] = $file_name;
        }

        about::create($validatesData);
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
        $abouts = about::find($id);
        return view('backend.about.edit', [
            'abouts'=>$abouts,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'subtitle'      =>'required',
            'title'         =>'required',
            'image'         =>'',
            'description'   =>'required',
            'define'        =>'required',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/about'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        
        about::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        about::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
