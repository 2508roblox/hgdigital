<?php

namespace App\Livewire;

use App\Models\Blog as BlogModel;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use Livewire\Component;

class Blog extends Component
{
    public $blogs;
    public $categories;
    public $tags;

    public $relatedPosts;

    public function mount()
    {
        $this->blogs = BlogModel::all();
        $this->categories = BlogCategory::all();
        $this->tags = BlogTag::all();
        $this->relatedPosts = BlogModel::orderBy('views', 'desc')->limit(3)->get();
    }
    public function render()
    {
        return view('livewire.blog');
    }
}
