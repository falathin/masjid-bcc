<?php

use App\Http\Controllers\{
    ArticleController,
    KasMasjidController,
};

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/berita', function () {
    return view('news');
})->name('news');

Route::get('/qna', function () {
    return view('contact');
})->name('contact');

Route::get('/tentang', function () {
    return view('about');
})->name('about');

Route::get('/bumm', function () {
    return view('bumm');
})->name('bumm');

Route::get('/galery', function () {
    return view('galery');
})->name('galery');

Route::get('/pesantren', function () {
    return view('pesantren');
})->name('pesantren');

Route::get('/qurban', function () {
    return view('qurban');
})->name('qurban');

Route::get('/ikatan', function () {
    return view('ikatan');
})->name('ikatan');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin-home', function () {
    return view('admin.dashboard');
})->name('admin.home');

Route::resource('admin/article', ArticleController::class)->names('admin.article');
Route::get('/berita', [ArticleController::class, 'frontIndex'])->name('news');

Route::resource('admin/kas', KasMasjidController::class);