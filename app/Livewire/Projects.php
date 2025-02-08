<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Website;

class Projects extends Component
{
    public $categories;
    public $websites;

    public function mount()
    {
        // Fetch categories and websites from the database
        $this->categories = Category::all();
        $this->websites = Website::with('category')->get(); // Eager load categories
    }

    public function render()
    {
        return view('livewire.projects', [
            'categories' => $this->categories,
            'websites' => $this->websites,
        ]);
    }
}