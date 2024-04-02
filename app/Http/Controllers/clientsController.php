<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use Str;

class clientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = client::all();
        return view('backend.client.index', [
            'clients'=>$clients,
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
            'image'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/client'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        client::create($validatesData);
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
        $clients = client::find($id);
        return view('backend.client.edit', [
            'clients'=>$clients,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'name'=>'required',
            'image'=>'',
            'status'=>'',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/client'), $file_name);
            $validatesData['image'] = $file_name; 
        }

        client::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        client::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
