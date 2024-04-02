<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Http\Request;

class RegisterStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regstudents = customers::all();
        return view('backend.regstudent.index',[
            'regstudents'=>$regstudents,
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        customers::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }
}
