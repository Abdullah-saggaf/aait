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

Route::get('/about/mission', function () {
    return view('about.mission');
})->name('about.mission');

Route::get('/about/quality', function () {
    return view('about.quality');
})->name('about.quality');

// Services
Route::get('/services/calibration', function () {
    return view('services.calibration');
})->name('services.calibration');

Route::get('/services/inspection', function () {
    return view('services.inspection');
})->name('services.inspection');

Route::get('/services/certification', function () {
    return view('services.certification');
})->name('services.certification');

Route::get('/services/maintenance', function () {
    return view('services.maintenance');
})->name('services.maintenance');

Route::get('/services/training', function () {
    return view('services.training');
})->name('services.training');

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
