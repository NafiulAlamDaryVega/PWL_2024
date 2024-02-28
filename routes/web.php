<?php

use Illuminate\Support\Facades\Route;
//ditambahkan
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\PhotoController;

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

// Route::get('/hello', function() {
//     return 'Hello World';
// });

Route::get('/world', function() {
    return 'World';
});

// Route::get('/', function() {
//     $pesan = 'Selamat Datang';
//     return "$pesan";
// });

// Route::get('/about', function() {
//     $nim = 2241720048;
//     $nama = 'Nafiul Alam Dary Vega';
//     return 'NIM = '.$nim.'<br>Nama = '.$nama;
// });

Route::get('/user/{name}', function($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/route/articles/{id}', function($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Nafiul Alam Dary Vega']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Nafiul Alam Dary Vega']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);

