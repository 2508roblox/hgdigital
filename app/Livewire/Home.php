<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'meta' => [
                'title' => 'Công ty thiết kế website chất lượng giá rẻ - HG Digital',
                'description' => 'HG Digital chuyên cung cấp dịch vụ thiết kế website chuyên nghiệp, giá rẻ, tối ưu SEO, hỗ trợ kỹ thuật tận tâm.',
                'keywords' => 'thiết kế website, dịch vụ thiết kế web, website giá rẻ, HG Digital',
                'author' => 'HG Digital',
            ],
        ]);
    }
}
