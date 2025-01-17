<?php

namespace App\Livewire;

use App\Models\TemplateWebsite;
use Livewire\Component;

class TemplateDetail extends Component
{
    
    public $template;

    public function mount($slug)
    {
        $this->template = TemplateWebsite::with('category', 'tags')->where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.template-detail', [
            'template' => $this->template,
        ]);
    }
}
