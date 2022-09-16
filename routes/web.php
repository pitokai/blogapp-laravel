<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/home/home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('/about/about', [
        "title" => "About",
        "name" => "vito",
        "email" => "vito@gmail.com",
        "image" => "1.jpg",
    ]);
});
// Route::get('/posts', function () {
//     return view('/posts/posts', [
//         "title" => "About",
//     ]);
// });

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
