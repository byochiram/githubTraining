<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Okky', function(){
    return view('okky');
})->name('okky');

Route::get('/Alba', function(){
    return view('alba');
})->name('alba');

Route::get('/Ucup', function(){
    return view('ucup');
})->name('ucup');

Route::get('/Demina', function(){
    return view('demina');
})->name('demina');

Route::get('/Keisya', function(){
    return view('keisya');
})->name('keisya');

Route::get('/Ida', function(){
    return view('ida');
})->name('ida');

Route::get('/Aulya', function(){
    return view('aulya');
})->name('aulya');
