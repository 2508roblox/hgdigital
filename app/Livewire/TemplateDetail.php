<?php

namespace App\Livewire;

use App\Models\TemplateWebsite;
use Livewire\Component;

class TemplateDetail extends Component
{
    public $template;
    public $relatedTemplates;

    public function mount($slug)
    {
        $this->template = TemplateWebsite::with('category', 'tags')->where('slug', $slug)->firstOrFail();

        // Lấy 3 mẫu tương tự từ cùng danh mục, trừ mẫu hiện tại
        $this->relatedTemplates = TemplateWebsite::where('category_id', $this->template->category_id)
            ->where('id', '!=', $this->template->id)
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.template-detail', [
            'template' => $this->template,
            'relatedTemplates' => $this->relatedTemplates,
        ]);
    }
}
