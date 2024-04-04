<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use App\Models\course;
use App\Models\courseVideo;
use App\Models\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customerlogin');
    }

    //student_dashboard
    function student_dashboard(){
        $courses = checkout::where('customer_id', Auth::guard('customerlogin')->user()->id)->get();
        $coursesCount = checkout::where('customer_id', Auth::guard('customerlogin')->user()->id)->count();
        $courseVideoCount = courseVideo::where('course_id', $courses->first()->course_id)->count();
        return view('student.studentDashboard',[
            'courses'=>$courses,
            'courseVideoCount'=>$courseVideoCount,
            'coursesCount'=>$coursesCount,
        ]);
    }

    // student_couse_list
    function student_couse_list(){
        $courses = checkout::where('customer_id', Auth::guard('customerlogin')->user()->id)->get();
        return view('student.studentcouselist', [
            'courses'=>$courses,
        ]);
    }

    // student_course_details
    function student_course_details($id){
        $courses = checkout::find($id);
        $courses_list = course::where('id', $courses->course_id)->get();
        $courses_videos = courseVideo::where('course_id', $courses->course_id)->get();
        return view('student.studentCoursedetails',[
            'courses'=>$courses,
            'courses_list'=>$courses_list,
            'courses_videos'=>$courses_videos,
        ]);
    }

    // student_edit
    function student_edit(){
        return view('student.studentEdit');
    }
    // student.update
    function student_update(Request $request){
        if($request->password != null){
            $request->validate([
                'password' => 'required_with:password_confirmation|same:password_confirmation',
            ]);
            customers::where('id', Auth::guard('customerlogin')->user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'number'=>$request->number,
                'address'=>$request->address,
                'password'=>bcrypt($request->password),
                'temp'=>$request->password,
            ]);
        }
        else{
            customers::where('id', Auth::guard('customerlogin')->user()->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'number'=>$request->number,
                'address'=>$request->address,
            ]);
        }
        return back()->with('success', 'Update Successfully');
    }

}
