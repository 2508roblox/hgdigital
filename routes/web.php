<?php

use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\Home;
use App\Livewire\TemplateDetail;
use App\Livewire\TemplateList;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/blog', Blog::class)->name('blog.index');

Route::get('/blog/{slug}', BlogDetail::class)->name('blog.detail');

Route::get('/templates', TemplateList::class)->name('template.list');
Route::get('/templates/{slug}', TemplateDetail::class)->name('template.detail');