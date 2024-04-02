<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = team::all();
        return view('backend.team.index', [
            'teams'=>$teams,
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
            'facebook'=>'',
            'instagram'=>'',
            'linkedin'=>'',
            'github'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/team'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        team::create($validatesData);
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
        $teams = team::find($id);
        return view('backend.team.edit', [
            'teams'=>$teams,
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
            'facebook'=>'',
            'instagram'=>'',
            'linkedin'=>'',
            'github'=>'',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/team'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        team::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        team::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
