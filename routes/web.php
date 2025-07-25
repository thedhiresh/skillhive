<?php

use App\Models\Opportunity;
use App\Models\PdfResources;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PdfresourceController;
use App\Http\Controllers\BlogController;

use App\Models\Course;
use App\Models\Category;

Route::get('/', function () {
    $courses = Course::all();
    return view('home.index' , compact('courses'));
});
// Add this route to your web.php
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
// Authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        $courses = Course::all();
        $pdfresources = Pdfresources::all();
        return view('dashboard.index', compact('courses' , 'pdfresources'));
    })->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('courses', CourseController::class);

    Route::get('/course', function (){
        $courses = Course::with('category')->get();
        $categories = Category::all();
        return view('components.course.index', compact('courses', 'categories'));
    })->name('course');

    Route::get('/pdfs', function (){
        $pdfresource = PdfResources::orderBy('created_at', 'desc')->paginate(10);
        return view('pdfs.index', compact('pdfresource'));
    })->name('pdfs');

    Route::get('/opportunities', function (){
        $opportunities = Opportunity::latest()->paginate(10);
        return view('opportunities.index', compact('opportunities'));
    })->name('opportunities');


    Route::get('/opportunities/{id}', function ($id) {
        $opportunity = Opportunity::findOrFail($id);

        // If tags are stored as JSON or comma-separated
        if (is_string($opportunity->tags)) {
            $opportunity->tags = explode(',', $opportunity->tags); // or json_decode
        }
        return view('opportunities.show', compact('opportunity'));
    })->name('opportunities.show');


    Route::get('/blog', function (){
        return view('blogs.index');
    });

    Route::get('/opportunity', function (){
        return view('admin.opportunities.index');
    })->name('opportunity');


    Route::resource('opportunity', OpportunityController::class);
    Route::resource('pdfresource', PdfresourceController::class);
    Route::resource('blogs', BlogController::class);

});




// Redirect root to dashboard if logged in, otherwise to login
//Route::get('/', function () {
//    return Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
//});


