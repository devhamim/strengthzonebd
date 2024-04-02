<?php

namespace App\Http\Controllers;

use App\Models\feature;
use App\Models\portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature_id = feature::where('status', 1)->get();
        $portfolios = portfolio::all();
        return view('backend.portfolio.index', [
            'feature_id'=>$feature_id,
            'portfolios'=>$portfolios,
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
            'feature_id'        =>'required',
            'name'              =>'required',
            'title'             =>'required',
            'image'             =>'',
            'client'            =>'',
            'date'              =>'',
            'value'             =>'',
            'link'              =>'',
            'description'       =>'required',
            'completed'         =>'required',
            'define'            =>'required',
        ];

        $validatesData = $request->validate($rules); 
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/portfolio'), $file_name);
            $validatesData['image'] = $file_name;
        }

        portfolio::create($validatesData);
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
        $portfolios = portfolio::find($id);
        return view('backend.portfolio.edit', [
            'portfolios'=>$portfolios,
            'feature_id'=>$feature_id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'feature_id'      =>'required',
            'name'      =>'required',
            'title'         =>'required',
            'image'         =>'required',
            'client'         =>'',
            'date'         =>'',
            'value'         =>'',
            'link'         =>'',
            'description'   =>'required',
            'completed'        =>'required',
            'define'        =>'required',
            'status'        =>'required',
        ];

        $validatesData = $request->validate($rules);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5). rand(1000, 999999). '.'.$extension;
            $image->move(public_path('uploads/portfolio'), $file_name);
            $validatesData['image'] = $file_name; 
        }
        
        portfolio::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        portfolio::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
