<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Category;
use Livewire\Component;

class BlogDetail extends Component
{
    public $blog;
    public $categories;
    public $tags;
    public $blogSameCategory;
    public $relatedPosts;
    public function mount($slug)
    {
        $this->blog = Blog::where('slug', $slug)->first();
        $this->blog->views = $this->blog->views + 1;
        $this->blog->save();
        $this->categories = BlogCategory::all();
        $this->tags = BlogTag::all();
        $this->blogSameCategory = Blog::where('category_id', $this->blog->category_id)->limit(3)->get();
        $this->relatedPosts = Blog::orderBy('views', 'desc')->limit(3)->get();
    }
    public function render()
    {
        return view('livewire.blog-detail');
    }
}
