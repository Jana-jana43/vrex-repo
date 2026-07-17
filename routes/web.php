<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Frontend.index');
});




Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/about', [FrontendController::class, 'about'])->name('about');

Route::get('/service', [FrontendController::class, 'service'])->name('service');

Route::get('/best-uiux-design-company-in-chennai', [FrontendController::class, 'uiux'])->name('uiux');

Route::get('/software-quality-assurance-services-in-chennai', [FrontendController::class, 'qualityassurance'])->name('quality-assurance');

Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');



Route::get('/graphic-designing-company-in-chennai', function () {
    return view('Frontend.service-detail.graphic-designing-company-in-chennai');
});

Route::get('/web-development-company', function () {
    return view('Frontend.service-detail.web-development-company');
});


Route::get('/best-seo-agency-in-chennai', function () {
    return view('Frontend.service-detail.best-seo-agency-in-chennai');
});

Route::get('/digital-marketing-agency-chennai', function () {
    return view('Frontend.service-detail.digital-marketing-agency-chennai');
});

Route::get('/best-mobile-app-development-services-chennai', function () {
    return view('Frontend.service-detail.best-mobile-app-development-services-chennai');
});




Route::get('/course', function () {
    return view('Frontend.course');
});

Route::get('/careers', function () {
    return view('Frontend.careers');
});


Route::get('/blog', function () {
    return view('Frontend.blog');
});


Route::get('/blog-detail', function () {
    return view('Frontend.blog-detail');
});




Route::get('/blog/how-consistent-ui-ux-design-improves-engagement', function () {
    return view('Frontend.blog.ui-ux');
});

Route::get('/blog/how-quality-assurance-improves-product-performance', function () {
    return view('Frontend.blog.quality-assurance');
});

Route::get('/blog/what-is-graphic-designing-and-why-it-matters', function () {
    return view('Frontend.blog.graphic-designing');
});

Route::get('/blog/why-web-development-is-essential-for-business-growth', function () {
    return view('Frontend.blog.web-development');
});

Route::get('/blog/how-seo-works-and-builds-consistent-organic-traffic', function () {
    return view('Frontend.blog.seo');
});

Route::get('/blog/what-is-digital-marketing-and-how-it-helps-businesses', function () {
    return view('Frontend.blog.digital-marketing');
});

Route::get('/blog/what-to-know-before-starting-mobile-app-development', function () {
    return view('Frontend.blog.mobile-app-development');
});

Route::get('/blog/reel-warriors-creative-talent-competition', function () {
    return view('Frontend.blog.reel-competition');
});


Route::get('course-terms', function () {
    return view('Frontend.courseTerms');
});

//Route::get('teams', function (){
  //return view('Frontend.team');
//});


Route::get('course-privacy', function () {
    return view('Frontend.course-privacy');
});

Route::get('/projects', function () {
    return view('Frontend.projects');
});



Route::get('/support', function () {
    return view('Frontend.service-detail.support');
});


Route::get('/course/web-development-training-chennai', function () {
    return view('course-detail.web-development-training-chennai');
});

Route::get('/course/graphic-design-internship', function () {
    return view('course-detail.graphic-design-internship');
});


Route::get('/course/mobile-app-development-internship', function () {
    return view('course-detail.mobile-app-development-internship');
});



Route::get('/course/flutter-developer-internship', function () {
    return view('course-detail.flutter-developer-internship');
});


Route::get('/course/php-training-in-chennai', function () {
    return view('course-detail.php-training-in-chennai');
});


Route::get('/course/software-testing-training-in-chennai', function () {
    return view('course-detail.software-testing-training-in-chennai');
});





Route::get('faq', function () {
    return view('Frontend.faq');
});


Route::get('terms', function () {
    return view('Frontend.terms');
});


Route::get('privacy', function () {
    return view('Frontend.privacy');
});




Route::get('/apply-form', function () {
    return view('course-detail.apply-form');
});




Route::post('/contact/send', [FrontendController::class, 'sendContact'])->name('contact.send');


Route::post('/course/send', [FrontendController::class, 'send'])->name('contact.send');

Route::post('/apply-course', [FrontendController::class, 'submitForm'])->name('apply.course');
Route::post('/send-contact-mail', [FrontendController::class, 'SendMail'])->name('contact.course');

Route::post('/job-apply', [FrontendController::class, 'apply'])->name('job.apply');

