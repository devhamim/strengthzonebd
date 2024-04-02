<?php

namespace App\Http\Controllers;

use App\Models\privacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $privacyPolicys = privacyPolicy::first();
        return view('backend.privacy_policy.index', [
            'privacyPolicys'=>$privacyPolicys,
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
            'description'  =>'required',
        ];

        $validatesData = $request->validate($rules);
        
        privacyPolicy::create($validatesData);
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
        $privacyPolicys = privacyPolicy::find($id);
        return view('backend.privacy_policy.edit', [
            'privacyPolicys'=>$privacyPolicys,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'description'       =>'required',
        ];

        $validatesData = $request->validate($rules);
        
        privacyPolicy::where('id', $id)->update($validatesData);
        toast('Update Success','success');   
        return redirect()->route('privacyPolicy.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
