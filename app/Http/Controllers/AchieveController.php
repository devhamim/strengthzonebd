<?php

namespace App\Http\Controllers;

use App\Models\achieve;
use Illuminate\Http\Request;
use Str;

class AchieveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achieves = achieve::all();
        return view('backend.achieve.index', [
            'achieves'=>$achieves,
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
            'title'         =>'required',
            'icon'          =>'',
            'total'         =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/achieve'), $file_name);
            $validatesData['icon'] = $file_name;
        }

        achieve::create($validatesData);
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
        $achieves = achieve::find($id);
        return view('backend.achieve.edit', [
            'achieves'=>$achieves,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'title'         =>'required',
            'icon'          =>'',
            'total'         =>'required',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('icon')){
            $image = $request->file('icon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/achieve'), $file_name);
            $validatesData['icon'] = $file_name;
        }
        
        achieve::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('achieve.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        achieve::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
