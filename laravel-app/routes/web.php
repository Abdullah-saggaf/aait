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

Route::get('/services/contracting', function () {
    return view('services.contracting');
})->name('services.contracting');

// Partners
Route::get('/partners', function () {
    $partners = [
        ['name' => 'Saudi Aramco', 'logo' => 'saudi-aramco.svg'],
        ['name' => 'SABIC', 'logo' => 'Logo_of_Sabic.svg.svg'],
        ['name' => 'Petro Rabigh', 'logo' => 'petro-rabigh-logo-png_seeklogo-310872.svg'],
        ['name' => 'Saudi Electricity Company', 'logo' => 'Logo_Saudi_Electric_Company.svg.svg'],
        ['name' => 'National Industrialization Company', 'logo' => '2060.SR_BIG.svg'],
        ['name' => 'SWCC - Saline Water Conversion Corporation', 'logo' => 'SWCC - Saline Water Conversion Corporation.png'],
        ['name' => 'Ma\'aden - Saudi Arabian Mining Company', 'logo' => 'idNZXI8qFc_1770987352319.svg'],
    ];
    return view('partners.index', compact('partners'));
})->name('partners.index');

// Contact
Route::get('/contact', function () {
    return view('contact.index');
})->name('contact.index');
