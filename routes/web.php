<?php

use App\Livewire\Blog;
use App\Livewire\BlogDetail;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Services;
use App\Livewire\ServicesDetail;
use App\Livewire\TemplateDetail;
use App\Livewire\TemplateList;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/blogs', Blog::class)->name('blog.index');

Route::get('/blog/{slug}', BlogDetail::class)->name('blog.detail');

Route::get('/templates', TemplateList::class)->name('template.list');
Route::get('/templates/{slug}', TemplateDetail::class)->name('template.detail');
Route::get('/contact', Contact::class)->name('blog.index');
Route::get('/services', Services::class)->name('services.index');
Route::get('/services/{slug}', action: ServicesDetail::class)->name('services.detail');
