<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\checkout;
use App\Models\customers;
use Illuminate\Http\Request;
use Mail;

class StudentListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentslist = checkout::all();
        return view('backend.studentlist.index',[
            'studentslist'=>$studentslist,
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
        checkout::find($id)->delete();
        toast('Delete Success','warning');
        return back();
    }

    // account_permission_update
    function account_permission_update(Request $request){
        $request->validate([
            'customer_id'=>'required',
            'permission'=>'required',
        ]);

        $mailData = [
            'title' => 'My mail from Strengthzonebd',
            'body' => 'Your Login email and password.'
        ];

        $mailData = customers::where('id', $request->customer_id)->first();
        Mail::to($mailData->email)->send(new MailNotify($mailData));

        checkout::where('id', $request->id)->update([
            'permission' => $request->permission,
        ]);

        toast('permission Success','warning');
        return back();
    }
}
