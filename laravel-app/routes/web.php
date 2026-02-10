<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About Us
Route::get('/about', function () {
    return view('about.index');
})->name('about.index');

// Services
Route::get('/services/concrete', function () {
    return view('services.concrete');
})->name('services.concrete');

Route::get('/services/soil', function () {
    return view('services.soil');
})->name('services.soil');

Route::get('/services/aggregates', function () {
    return view('services.aggregates');
})->name('services.aggregates');

Route::get('/services/asphalt', function () {
    return view('services.asphalt');
})->name('services.asphalt');

Route::get('/services/water', function () {
    return view('services.water');
})->name('services.water');

// Partners
Route::get('/partners', function () {
    $partners = [
        'Saudi Aramco',
        'SABIC',
        'Metals Services Company',
        'Petro Rabigh',
        'Saudi Electricity Company',
        'Ma\'aden',
        'SWCC - Saline Water Conversion Corporation',
        'Aramco Oil Refineries',
        'Saudi Arabian Mining Company',
        'National Industrialization Company'
    ];
    return view('partners.index', compact('partners'));
})->name('partners.index');

// License Validation
Route::get('/license/system', function () {
    return view('license.system');
})->name('license.system');

Route::get('/license/equipment', function () {
    return view('license.equipment');
})->name('license.equipment');

Route::get('/license/personal', function () {
    return view('license.personal');
})->name('license.personal');

// Contact
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');
