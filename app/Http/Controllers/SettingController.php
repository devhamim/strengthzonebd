<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use Photo;
use Image;
use Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = setting::all();
        return view('backend.setting.index', [
            'settings'=>$settings,
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
    public function update(Request $request, setting $setting)
    {
        $rules = [
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'about'=>'required|max:255',
            'number'=>'',
            'logo'=>'',
            'footer_logo'=>'',
            'favicon'=>'',
            'address'=>'',
            'footer'=>'required|max:255',
            'title'=>'required|max:255',
            'meta_title'=>'',
            'meta_tag'=>'',
            'meta_description'=>'',
            'facebook'=>'',
            'twitter'=>'',
            'linkedin'=>'',
            'instagram'=>'',
            'youtube'=>'',
            'pinterest'=>'',
        ];
        
         /**
         * Handle upload an image
         */
       
        $validatesData = $request->validate($rules);


        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/setting'), $file_name);
            $validatesData['logo'] = $file_name;
        }
        if ($request->hasFile('footer_logo')) {
            $image = $request->file('footer_logo');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/setting'), $file_name);
            $validatesData['footer_logo'] = $file_name;
        }
        if ($request->hasFile('favicon')) {
            $image = $request->file('favicon');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/setting'), $file_name);
            $validatesData['favicon'] = $file_name;
        }


        // setting::created($validatesData);
        setting::where('id', $setting->id)->update($validatesData);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
