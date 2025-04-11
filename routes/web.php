<?php

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

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/admin-home', function () {
    return view('admin.index');
})->name('admin.home');