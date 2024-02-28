<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/', [PageController::class, 'index']); 
Route::get('/', [HomeController::class, 'index']); 

Route::get('/hello', function () {
    return 'welcome';
});

Route::get('/world', function () {    
    return 'World'; 
}); 

// Route::get('/about', function () {
//     return '2241720148 <br>Irshandy Aditya Wicaksana';
// });

// Route::get('/about', [PageController::class, 'about']); 
Route::get('/about', [AboutController::class, 'about']); 

Route::get('/user/{name}', function ($name) {
     return 'Nama saya '.$name; 
}); 

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

// Route::get('/articles/{id}', function ($id) { 
//     return 'Halaman Artikel dengan ID '.$id; 
// }); 

// Route::get('/articles/{id}', [PageController::class, 'articles']); 
Route::get('/articles/{id}', [ArticleController::class, 'artikel']); 

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
}); 

//contoh penggunaan group
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });
//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });

// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

//contoh penggunaan redirect
//Route::redirect('/here', '/there');

//contoh view route
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class,'hello']); 

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 
    'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
]); 

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Irshandy Aditya']); 
// }); 

Route::get('/greeting', [WelcomeController::class, 'greeting']); 
