<?php

namespace App\Livewire;

use App\Models\TemplateCategory;
use Livewire\Component;

class HeaderSecondary extends Component
{
   
    public function render()
    {
        $categories = TemplateCategory::all(); // Lấy toàn bộ danh mục
        return view('livewire.header-secondary', compact('categories'));
    }
}
