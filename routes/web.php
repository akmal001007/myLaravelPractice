<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

use function Laravel\Prompts\alert;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/slider', function () {
//     return '<h1>this page is slider</h1>';
// });

// Route::get('/about', function(){
//     return '<h1>this is about</h1>';
// });

// Route::redirect('/slider', '/about', 301);

// Route::get('/contact', function () {
//     return '<h1>this is contact</h1>';
// });

// Route::get('/gallery', function () {
//     return '<h1>this is gallery</h1>';
// });

// Route::get('/slider/username/password', function () {
//     return '<h1>this is username and password slider</h1>';
// });

// Route::get('/slider/{name}/{password}', function ($name, $password) {
//     return "<h1>this is $name and $password</h1>";
// })->name('slider-name');

// Route::get('/about/{name?}/{password?}', function ($name = null, $password = null) {
//     return "<h1>my name is $name and password is $password</h1>";
// })->name('about-name-pass');

// Route::get('/gallery/{name?}/{password?}', function ($name = null, $password = null) {
//     return "<h1>my name is $name and password is $password</h1>";
// })->name('about-name-pass');

// Route::get('/about/info', function () {
//     return '<h1>this is about info pages</h1>';
// })->name('info');

// Route::prefix('admin/panel/')->group(function (){
//     Route::get('/slider', function () {
//         return '<h1>this page is slider</h1>';
//     });

//     Route::get('/about', function(){
//     return '<h1>this is about</h1>';
// });

// Route::get('/about', function(){
//     return '<h1>this is about</h1>';
// });
// });

// Route::get('/slider', function(){
//     $firstName = 'akmal';
//     $lastName = "nawabi";
//     $age = 22;
//     $email = "akmal@gmail.com";
//     return view('slider', compact('firstName', 'lastName', 'age', 'email'));
// });

// Route::get('/slider', function(){
//     $data = [
//         "akmal","ahmad",22,"mando"
//     ];
//     return view('slider', compact('data'));
// });

// Route::get('/slider', function(){
//     $data = "<script>alert('thats ok')</script>";
//     return view('slider', compact('data'));
// });

// Route::get('/test', function () {
//     $firstName = 'akmal00';
//     $lastName = 'nawab';
//     $email = 'akmal00owier09tf';

//    return view('test.test', compact(['firstName', 'lastName', 'email'])); 
// });

Route::get('/master', function(){
    return view('myTestLayout/master');
});

// if and else 
// Route::get('/inherit', function () {
//     $username = "akmal";
//     return view('test/inherit', compact('username'));
// });

// for loop 
// Route::get('/inherit', function(){
//     $data = ['akmal', 'nawab', 7007];
//     return view('test/inherit', compact('data'));
// });

// Route::get('/slider', [\App\Http\Controllers\ProfileController::class,'index']);

// Route::get('/test/create', [\App\Http\Controllers\ProfileController::class, 'create'])->name('slider_create');

Route::resource('/slider', \App\Http\Controllers\ProfileController::class);

// Route::get('/create', function(){
//     return view('test/create');
// });
// installdd by me breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
