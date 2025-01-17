<?php

use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/blogs', Blog::class)->name('blog.index');

Route::get('/blog/{slug}', BlogDetail::class)->name('blog.detail');
Route::get('/contact', Contact::class)->name('blog.index');
