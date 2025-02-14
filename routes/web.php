<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
})->name('public.index');

Route::get('about-us', function () {
    return view('frontend.about-us');
})->name('public.about-us');

Route::get('services', function () {
    return view('frontend.services');
})->name('public.services');

Route::get('investors', function () {
    return view('frontend.investors');
})->name('public.investors');

Route::get('international-seation', function () {
    return view('frontend.international-seation');
})->name('public.international-seation');


Route::get('patient-care', function () {
    return view('frontend.patient-care');
})->name('public.patient-care');

Route::get('media-center', function () {
    return view('frontend.media-center');
})->name('public.media-center');

Route::get('contact-us', function () {
    return view('frontend.contact-us');
})->name('public.contact-us');
