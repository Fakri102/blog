<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
*/


Route::view('series/create', 'series.create');
Route::view('series/show', 'series.show');


// Route::get('contact', function (Request $request) {
//     // return view('contact');
//     // return $request->fullURL();
//     return $request->path() == 'contact' ? true : false;
// });

// Route::get('contact', function () {
//     return request()->path() == 'contact' ? true : false;
//     return request()->is('contact') ? true : false;
// });

// Route::get('/contact', function () {
//     $name = request('name');
//     // return "my name is" . $name;
//     return view('contact', ['name'=> $name]);
// });

// Route::get('/contact', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, '__invoke']);

Route::view('/about', 'about');
Route::view('/login', 'login');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/homepage', function() {
    $name="fakri gaffar";
    $name2="<h1>fakri </h1>";
    return view('homepage', ['name'=> $name] , ['name2'=> $name2]  );
});

Route::get('post/{slug}', [PostController::class , 'show']);



