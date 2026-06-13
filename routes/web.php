<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'))->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/landscaping-services', 'pages.services')->name('landscaping-services');
Route::view('/industrial-services', 'pages.industrial')->name('industrial-services');

// Remaining pages (placeholder until built)
$pages = [
    'projects' => 'Projects',
    'gallery'  => 'Gallery',
    'shop'     => 'Shop',
    'team'     => 'Our Team',
    'contact'  => 'Contact Us',
];

foreach ($pages as $slug => $title) {
    Route::get('/'.$slug, fn () => view('placeholder', ['title' => $title]))->name($slug);
}
