<?php

namespace App\Livewire;

use App\Models\TemplateWebsite;
use App\Models\TemplateCategory;
use Livewire\Component;
use Livewire\WithPagination;

class TemplateList extends Component
{
    use WithPagination;

    public $search = ''; // Tìm kiếm
    public $category; // Bộ lọc danh mục
    public $priceRange; // Bộ lọc khoảng giá (dạng mảng: ['start' => ..., 'end' => ...])
    protected $paginationTheme = "bootstrap";

    public function updatingSearch()
    {
        $this->resetPage(); // Reset về trang đầu khi tìm kiếm
    }

    public function selectCategory($categoryId)
    {
        $this->category = $categoryId;
        $this->resetPage();
    }

    public function selectPriceRange($startPrice, $endPrice)
    {
        $this->priceRange = ['start' => $startPrice, 'end' => $endPrice];
        $this->resetPage();
    }

    public function render()
    {
        // Lấy danh mục
        $categories = TemplateCategory::all();

        // Lọc templates
        $templates = TemplateWebsite::with('category', 'tags')
            ->when($this->category, fn($query) => $query->where('category_id', $this->category))
            ->when($this->priceRange, function ($query) {
                $query->whereBetween('discounted_price', [$this->priceRange['start'], $this->priceRange['end']]);
            })
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(9);

        return view('livewire.template-list', [
            'templates' => $templates,
            'categories' => $categories,
        ]);
    }
}
