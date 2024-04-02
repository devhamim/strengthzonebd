<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\courseVideo;
use Illuminate\Http\Request;
use Str;
use File;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = course::all();
        return view('backend.course.index',[
            'courses'=>$courses,
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
            'title'=>'required',
            'category'=>'required',
            'tag'=>'required',
            'price'=>'required',
            'discount'=>'',
            'description'=>'required',
            'image'=>'',
        ];

        $validatesData = $request->validate($rules);

        $validatesData['slug'] = Str::random(12);

        if($request->discount){
            $afterdiscount = $request->price*$request->discount/100;
            $validatesData['total'] = $request->price-$afterdiscount;
        }
        else{
            $validatesData['discount'] = 0;
            $discount = 0;
            $afterdiscount = $request->price*$discount/100;
            $validatesData['total'] = $request->price-$afterdiscount;
        }

        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
            $image->move(public_path('uploads/course'), $file_name);
            $validatesData['image'] = $file_name;
        }

        course::create($validatesData);


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
        $courses = course::find($id);
        return view('backend.course.edit', [
            'courses'=>$courses,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $rules = [
        'title' => 'required',
        'category' => 'required',
        'tag' => 'required',
        'price' => 'required',
        'discount' => '',
        'description' => 'required',
        'image' => '',
        'status' => 'required',
    ];

    $validatedData = $request->validate($rules);

    if ($request->discount) {
        $afterdiscount = $request->price * $request->discount / 100;
        $validatedData['total'] = $request->price - $afterdiscount;
    } else {
        $validatedData['discount'] = 0;
        $discount = 0;
        $afterdiscount = $request->price * $discount / 100;
        $validatedData['total'] = $request->price - $afterdiscount;
    }

    if ($request->hasFile('image')) {
        $course = Course::findOrFail($id);
        if ($course->image) {
            $del_path = public_path('uploads/course') . '/' . $course->image;
            if (file_exists($del_path) && is_file($del_path)) {
                unlink($del_path);
            }
        }

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $file_name = Str::random(5) . rand(1000, 999999) . '.' . $extension;
        $image->move(public_path('uploads/course'), $file_name);
        $validatedData['image'] = $file_name;
    }

    $course = course::findOrFail($id);
    $course->update($validatedData);

    $courseVideos = courseVideo::where('course_id', $id)->get();
    if ($request->hasFile('videos')) {
        foreach ($courseVideos as $video) {
            Storage::delete($video->path);
            $video->delete();
        }
        foreach ($request->file('videos') as $video) {
            $path = $video->store('videos');
            courseVideo::create([
                'path' => $path,
                'course_id' => $course->id,
            ]);
        }
    }

    toast('Update Success', 'success');
    return redirect()->route('course.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);

    $videos = CourseVideo::where('course_id', $id)->get();
    foreach ($videos as $video) {
        Storage::delete($video->path);
        $video->delete();
    }

    if ($course->image) {
        Storage::delete('uploads/course/' . $course->image);
    }

    $course->delete();

        toast('Delete Success','warning');
        return back();
    }

    // course_invantory
    function course_invantory($id){
        $courses = course::find($id);
        $coursevideos = courseVideo::where('course_id', $id)->get();
        return view('backend.course.invantory',[
            'courses'=>$courses,
            'coursevideos'=>$coursevideos,
        ]);
    }

    // course_invantory_store
    function course_invantory_store(Request $request){
        $request->validate([
            'title'=>'required',
            'video'=>'required',
        ]);

        $video = $request->file('video');
        if ($video) {
            $file_name = time().'-'.$video->getClientOriginalName();
            $filesize = $video->getSize();
            $video->storeAs('public/', $file_name);

            $fileModel = new courseVideo;
            $fileModel->title = $request->title;
            $fileModel->name = $file_name;
            $fileModel->size = $filesize;
            $fileModel->path = 'storage/'. $file_name;
            $fileModel->status = $request->status;
            $fileModel->course_id = $request->course_id;
            $fileModel->save();
        }

        toast('Add Success','success');
        return back();
    }

    // course_video_destroy
    function course_video_destroy($id){
        $videos_del = courseVideo::where('id', $id)->first();
        Storage::delete($videos_del->path);
        $videos_del->delete();

        courseVideo::where('id', $id)->delete();

        toast('Delete Success','warning');
        return back();
    }
}
