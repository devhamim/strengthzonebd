<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchieveController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CustomerMessageController;
use App\Http\Controllers\CustomerSayController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\RegisterStudentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentListController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// frontend
Route::get('/', [FrontendController::class, 'home']);
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/courses', [FrontendController::class, 'courses'])->name('courses');
Route::get('/courses/details/{slug}', [FrontendController::class, 'courses_details'])->name('courses.details');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/our-portfolio', [FrontendController::class, 'our_portfolio'])->name('our.portfolio');
Route::get('/our-blog', [FrontendController::class, 'our_blog'])->name('our.blog');
Route::get('/our-blog/details/{slug}', [FrontendController::class, 'our_blog_details'])->name('our.blog.details');
Route::get('/contect', [FrontendController::class, 'contect'])->name('contect');
Route::get('/gallerys', [FrontendController::class, 'gallerys'])->name('gallerys');
Route::get('/our/team', [FrontendController::class, 'our_team'])->name('our.team');
Route::get('/our/clients', [FrontendController::class, 'our_clients'])->name('our.clients');
Route::get('/our/privacy/policy', [FrontendController::class, 'our_privacy_policy'])->name('our.privacy.policy');

Route::post('/blog/comment', [BlogController::class, 'blog_comment'])->name('blog.comment');
Route::get('/course/checkout/{slug}', [FrontendController::class, 'course_checkout'])->name('course.checkout');
Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/success/enroll', [FrontendController::class, 'success_enroll'])->name('success.enroll');


Route::get('/student/register/login', [FrontendController::class, 'customer_reglogin'])->name('customer.reglogin');
Route::post('/student/register', [FrontendController::class, 'customer_register'])->name('customer.register');
Route::post('/student/login', [FrontendController::class, 'customer_login'])->name('customer.login');
Route::get('/student/logout', [FrontendController::class, 'customer_logout'])->name('customer.logout');


Route::get('/student/dashboard', [StudentDashboardController::class, 'student_dashboard'])->name('student.dashboard');
Route::get('/student/course/list', [StudentDashboardController::class, 'student_couse_list'])->name('student.couse.list');
Route::get('/student/course/details/{id}', [StudentDashboardController::class, 'student_course_details'])->name('student.course.details');
Route::get('/student/edit', [StudentDashboardController::class, 'student_edit'])->name('student.edit');
Route::post('/student/update', [StudentDashboardController::class, 'student_update'])->name('student.update');

Auth::routes();

// backend
Route::get('/home', [HomeController::class, 'index'])->name('index');
        Route::resources([
            'users'      => UserController::class,
            'banner'      => BannerController::class,
            'setting'      => SettingController::class,
            'feature'      => FeatureController::class,
            'about'        => AboutController::class,
            'team'         => TeamController::class,
            'customerSay'  => CustomerSayController::class,
            'client'       => clientsController::class,
            'portfolios'   => PortfolioController::class,
            'blog'         => BlogController::class,
            'service'      => ServiceController::class,
            'pricing'      => PricingController::class,
            'privacyPolicy'=> PrivacyPolicyController::class,
            'gallery'      => GalleryController::class,
            'achieve'      => AchieveController::class,
            'customerMessage'=> CustomerMessageController::class,
            'course'        => CourseController::class,
            'studentlist'        => StudentListController::class,
            'regstudent'        => RegisterStudentController::class,
        ]);

Route::post('/account/permission/update', [StudentListController::class, 'account_permission_update'])->name('account.permission.update');
Route::get('/course/invantory/{id}', [CourseController::class, 'course_invantory'])->name('course.invantory');
Route::post('/course/invantory/store', [CourseController::class, 'course_invantory_store'])->name('course.invantory.store');
Route::get('/course/video/destroy/{id}', [CourseController::class, 'course_video_destroy'])->name('course.video.destroy');

