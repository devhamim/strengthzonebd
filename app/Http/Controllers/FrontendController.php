<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\achieve;
use App\Models\banner;
use App\Models\blog;
use App\Models\client;
use App\Models\customerSay;
use App\Models\gallery;
use App\Models\service;
use App\Models\setting;
use App\Models\team;
use App\Models\blogComment;
use App\Models\checkout;
use App\Models\course;
use App\Models\courseVideo;
use App\Models\customers;
use App\Models\privacyPolicy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class FrontendController extends Controller
{
    //home
    function home(){
        $abouts = about::where('status', 1)->where('define', 1)->get();
        $banners = banner::where('status', 1)->get();
        $services = service::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $gallerys = gallery::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $achieves = achieve::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        $settings = setting::all();
        return view('frontend.home',[
            'abouts'=>$abouts,
            'banners'=>$banners,
            'services'=>$services,
            'teams'=>$teams,
            'settings'=>$settings,
            'gallerys'=>$gallerys,
            'clients'=>$clients,
            'achieves'=>$achieves,
            'customerSays'=>$customerSays,
            'blogs'=>$blogs,
        ]);
    }

    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->where('define', 2)->get();
        $services = service::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        return view('frontend.about', [
            'abouts'=>$abouts,
            'services'=>$services,
            'clients'=>$clients,
            'teams'=>$teams,
        ]);
    }
    //services
    function services(){
        $services = service::where('status', 1)->get();
        return view('frontend.services', [
            'services'=>$services,
        ]);
    }
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    }
    //our_blog
    function our_blog(){
        $blogs = blog::where('status', 1)->get();
        return view('frontend.blog',[
            'blogs'=>$blogs,
        ]);
    }
    //our_blog_details
    function our_blog_details($slug){
        $latest_blogs = blog::where('status', 1)->get();
        $blogs = blog::where('slug', $slug)->get();
        $blog_comment = blogComment::where('blogs_id', $blogs->first()->id)->get();
        $blog_comment_count = blogComment::where('blogs_id', $blogs->first()->id)->count();
        $blog_comment_all = blogComment::all();
        return view('frontend.blog_details',[
            'blogs'=>$blogs,
            'latest_blogs'=>$latest_blogs,
            'blog_comment'=>$blog_comment,
            'blog_comment_count'=>$blog_comment_count,
            'blog_comment_all'=>$blog_comment_all,
        ]);
    }
    //contect
    function contect(){
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }
    //gallerys
    function gallerys(){
        $gallerys = gallery::where('status', 1)->get();
        return view('frontend.gallery', [
            'gallerys'=>$gallerys,
        ]);
    }
    //our_team
    function our_team(){
        $teams = team::where('status', 1)->get();
        return view('frontend.team', [
            'teams'=>$teams,
        ]);
    }
    //our_team
    function our_clients(){
        $clients = client::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        return view('frontend.client', [
            'clients'=>$clients,
            'customerSays'=>$customerSays,
        ]);
    }

    //our_team
    function our_privacy_policy(){
        $privacyPolicy = privacyPolicy::all();
        return view('frontend.privacyPolicy', [
            'privacyPolicy'=>$privacyPolicy,
        ]);
    }

    // courses
    function courses(){
        $courses = course::where('status', 1)->get();
        return view('frontend.courses',[
            'courses'=>$courses,
        ]);
    }

    // courses_details
    function courses_details($slug){
        $courses = course::where('slug', $slug)->first();
        $all_courses = course::where('status', 1)->get();
        $course_video = courseVideo::where('course_id', $courses->id)->get();
        $course_video_count = courseVideo::where('course_id', $courses->id)->count();
        return view('frontend.courses_details',[
            'courses'=>$courses,
            'all_courses'=>$all_courses,
            'course_video'=>$course_video,
            'course_video_count'=>$course_video_count,
        ]);
    }

    // course_checkout
    function course_checkout($slug){
        $courses = course::where('slug', $slug)->first();
        return view('frontend.checkout',[
            'courses'=>$courses,
        ]);
    }

    // checkout
    function checkout(Request $request){
        $rules = [
            'name'=>'required',
            'email' => 'required',
            'number'=>'required',
            'bkash_number'=>'required',
            'bkash_tran'=>'required',
            'address'=>'',
            'note'=>'',
            'course_id'=>'required',
        ];

        $validatesData = $request->validate($rules);
        if(Auth::guard('customerlogin')->check()){
            $validatesData['customer_id'] = Auth::guard('customerlogin')->user()->id;
        }
        else{
            $random_pass = Str::random(8);
            $customer_id = customers::insertGetId([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($random_pass),
                'temp'=>$random_pass,
                'created_at'=>Carbon::now(),
            ]);

            $validatesData['customer_id'] = $customer_id;
        }

        checkout::create($validatesData);

        return redirect()->route('success.enroll');
        toast('Enroll Successfully','success');
    }

    // success_enroll
    function success_enroll(){
        return view('frontend.successpage');
    }

    // customer_reglogin\
    function customer_reglogin(){
        return view('frontend.customer_login');
    }

    // customer_register
    function customer_register(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
        ];

        $valudatesData = $request->validate($rules);
        $valudatesData['password'] = bcrypt($request->password);
        $valudatesData['temp'] = 'n/a';

        customers::create($valudatesData);

        toast('Register Successfully','success');
        if(Auth::guard('customerlogin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('student.dashboard');
        }
        else{
            return redirect()->route('customer.reglogin');
        }
    }


    // customer_login
    function customer_login(Request $request){
        $request->validate([
            '*'=>'required',
        ]);
        if(Auth::guard('customerlogin')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('student.dashboard');
        }
        else{
            return redirect()->route('customer.reglogin');
        }
    }

     // customer logout
     function customer_logout(){
        Auth::guard('customerlogin')->logout();
        return redirect('/');
    }

}
