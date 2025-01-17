<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\TemplateCategory;

class Header extends Component
{
    public function render()
    {
        $categories = TemplateCategory::all(); // Lấy toàn bộ danh mục
        return view('livewire.header', compact('categories'));
    }
}
