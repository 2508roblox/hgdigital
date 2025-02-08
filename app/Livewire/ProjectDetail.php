<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Website;
use Livewire\Component;

class ProjectDetail extends Component
{
    public $categories;
    public $website;
    public $similarWebsites; // Thêm biến cho các bài tương tự

    public function mount($slug)
    {
        // Fetch categories from the database
        $this->categories = Category::all();
        
        // Lấy thông tin website dựa trên slug
        $this->website = Website::where('slug', $slug)->with('category')->firstOrFail(); // Eager load category

        // Lấy 3 bài tương tự cùng danh mục
        $this->similarWebsites = Website::where('category_id', $this->website->category_id)
                                         ->where('slug', '!=', $slug) // Không lấy bài hiện tại
                                         ->take(3)
                                         ->with('category')
                                         ->get(); // Lấy các bài tương tự
    }

    public function render()
    {
        return view('livewire.project-detail', [
            'categories' => $this->categories,
            'website' => $this->website,
            'similarWebsites' => $this->similarWebsites, // Truyền các bài tương tự ra view
        ]);
    }
}