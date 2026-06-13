<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/landscaping-services', 'pages.services')->name('landscaping-services');
Route::view('/industrial-services', 'pages.industrial')->name('industrial-services');
Route::view('/projects', 'pages.projects')->name('projects');
Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/shop', 'pages.shop')->name('shop');
Route::view('/team', 'pages.team')->name('team');
Route::view('/contact', 'pages.contact')->name('contact');
