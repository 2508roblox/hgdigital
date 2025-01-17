<?php

namespace App\Livewire;

use App\Models\TemplateWebsite;
use Livewire\Component;
use Livewire\WithPagination;

class TemplateList extends Component
{
    use WithPagination                                  ;

    public $search = ''; // Tìm kiếm
    public $category; // Bộ lọc danh mục

    public function updatingSearch()
    {
        $this->resetPage(); // Reset về trang đầu khi tìm kiếm
    }

    public function render()
    {
        $templates = TemplateWebsite::with('category', 'tags')
            ->when($this->category, fn($query) => $query->where('category_id', $this->category))
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(9);

        return view('livewire.template-list', [
            'templates' => $templates,
        ]);
    }
}
