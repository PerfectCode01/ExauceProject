<?php

use App\Livewire\Pages\Home;
use App\Livewire\Pages\About;
use App\Livewire\Pages\Lecon;
use App\Livewire\Pages\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/lecon', Lecon::class)->name('lecon');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');


