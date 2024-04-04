<?php

namespace App\Providers;

use App\Models\blog;
use App\Models\course;
use App\Models\setting;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // courses
        view()->composer('frontend.layout.footer', function ($view) {
            $view->with('courses', course::where('status', 1)->get());
        });

        // student coursw
        view()->composer('student.layout.footer', function ($view) {
            $view->with('courses', course::where('status', 1)->get());
        });
        // blog
        view()->composer('frontend.layout.footer', function ($view) {
            $view->with('blogs', blog::where('status', 1)->get());
        });
        // student blog
        view()->composer('student.layout.footer', function ($view) {
            $view->with('blogs', blog::where('status', 1)->get());
        });
        // setting
        View::composer('frontend.layout.footer', function ($view){
            $view->with('setting', setting::all());
        });
        // about
        View::composer('frontend.about', function ($view){
            $view->with('setting', setting::all());
        });
        // setting
        View::composer('frontend.layout.header', function ($view){
            $view->with('setting', setting::all());
        });
        // setting
        View::composer('frontend.layout.app', function ($view){
            $view->with('setting', setting::all());
        });
        // student footer
        View::composer('frontend.layout.footer', function ($view){
            $view->with('setting', setting::all());
        });
        // student header
        View::composer('student.layout.header', function ($view){
            $view->with('setting', setting::all());
        });
        // student app
        View::composer('student.layout.app', function ($view){
            $view->with('setting', setting::all());
        });
        // student sidebar
        View::composer('student.layout.sidebar', function ($view){
            $view->with('setting', setting::all());
        });
        // home
        View::composer('frontend.home', function ($view){
            $view->with('setting', setting::all());
        });
        // checkout
        View::composer('frontend.checkout', function ($view){
            $view->with('setting', setting::all());
        });
        // login
        View::composer('auth.login', function ($view){
            $view->with('setting', setting::all());
        });

         // setting
         View::composer('backend.layouts.header', function ($view){
            $view->with('setting', setting::all());
        });
         // setting
         View::composer('backend.layouts.footer', function ($view){
            $view->with('setting', setting::all());
        });
        // setting
         View::composer('backend.layouts.app', function ($view){
            $view->with('setting', setting::all());
        });
        // users
        View::composer('backend.layouts.header', function ($view){
            $view->with('users', User::where('id', Auth::user()->id));
        });
    }
}
